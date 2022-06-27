<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Auth::user()->kelas;
        $nilai = Nilai::where('pelajaran', $guru)->paginate(5);
        return view('guru.data_nilai', [
            'nilai' => $nilai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        $dataNilai = $request->all();
        //  Array 1 dimensi
        $id = DB::select("SHOW TABLE STATUS LIKE 'data_nilai'");
        $next_id = $id[0]->Auto_increment;
        if ($next_id >= 10) {
            $dataNilai['id'] = '0' . $next_id;
            Nilai::create($dataNilai);
        } else {
            $dataNilai['id'] = '00' . $next_id;
            Nilai::create($dataNilai);
        }

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
        $edit_nilai = Nilai::findOrFail($id);
        return view('guru.edit_nilai')->with([
            'nilai' => $edit_nilai
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
        $nilai_santri = Nilai::findOrFail($id);
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
        $hapus_nilai = Nilai::findOrFail($id);
        $hapus_nilai->delete();
        return redirect()->route('data-nilai');
    }

    public function tampilUser()
    {
        $nilai = Nilai::get();
        return view('users.nilai', [
            'tampilUser' => $nilai
        ]);
    }

    public function hitung(Request $request)
    {
        $kehadiran      = $request->input('kehadiran');
        $tugas          = $request->input('tugas');
        $uts            = $request->input('uts');
        $uas            = $request->input('uas');

        $nilai_akhir    = ($kehadiran + $tugas + $uts + $uas) / 4;

        return redirect('data-nilai', $nilai_akhir);

    }

}
