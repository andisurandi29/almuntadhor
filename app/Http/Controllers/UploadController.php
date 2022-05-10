<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buktiPembayaran = Pembayaran::latest()->get();
        return view('users.upload_bukti', compact('buktiPembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mengirim data dari modal tambah ke database
        \App\Models\Upload::create($request->all);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $upload = $request->bukti;
        $namaFile = time().rand(100,999).".".$upload->getClientOriginalExtension();
        // $namaFile = time().rand(100,999).".".$upload->getClientOriginalName();

            $dataUpload = new Pembayaran;
            $dataUpload->nis = $request->nis;
            $dataUpload->nama = $request->nama;
            $dataUpload->tanggal = $request->tanggal;
            $dataUpload->nominal = $request->nominal;
            $dataUpload->bukti = $namaFile;
            $dataUpload->keterangan = $request->keterangan;

            $upload->move(public_path().'/img', $namaFile);
            $dataUpload->save();

        // $validatedData = $request->validate([
        //     'nis' => 'required',
        //     'nama' => 'required',
        //     'tanggal' => 'required',
        //     'nominal' => 'required',
        //     'bukti' => 'image|file|max:3072',
        //     'keterangan' => 'required'
        // ]);
        
        // $upload = $request->all();

        // Pembayaran::create($validatedData);
        return redirect('dashboard')->with('success', 'Upload bukti pembayaran berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function riwayat()
    {
        $santri = Auth::user()->username;
        $riwayatPembayaran = Pembayaran::where('nis', $santri)->get();
        return view('users.riwayat_bayar', ['riwayatPembayaran' => $riwayatPembayaran]);
    }
}
