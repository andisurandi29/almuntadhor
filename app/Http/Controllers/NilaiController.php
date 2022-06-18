<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SantriMapel;
use App\Models\Santri;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \App\Models\SantriMapel::create($request->all);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataNilai = $request->validate([
            'santri_id'     => 'required',
            'mapel_id'     => 'required',
            'kehadiran'     => 'required',
            'tugas'     => 'required',
            'uts'     => 'required',
            'uas'     => 'required',
        ]);

        SantriMapel::create($dataNilai);

        return redirect()->route('data-nilai');
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
        $edit_nilai = SantriMapel::findOrFail($id);
        return view('guru.edit_nilai')->with([
            'santriMapel' => $edit_nilai
        ]);
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
        $update_nilai = $request->all();
        $nilai_santri = SantriMapel::findOrFail($id);
        $nilai_santri->update($update_nilai);
        return redirect('data-nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus_nilai = SantriMapel::findOrFail($id);
        $hapus_nilai->delete();
        return redirect()->route('data-nilai');
    }

    public function mapel()
    {
        $santriMapel = SantriMapel::all();
        return view('guru.data_nilai', [
            'santriMapel' => $santriMapel
        ]);
    }

    public function tampilUser()
    {
        $santri = Auth::user()->username;
        $tampilUser = SantriMapel::where('santri_id', $santri)->get();
        return view('users.nilai', [
            'tampilUser' => $tampilUser
        ]);
    }
}
