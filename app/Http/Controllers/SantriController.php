<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSantri;
use Illuminate\Support\Facades\DB;
class SantriController extends Controller
{
    public function index()
    {
        $data_santri = DataSantri::orderBy('angkatan', 'ASC')->paginate(5);
        return view('pengurus.v_santri', [
            'datas' => $data_santri
        ]);
    }

    public function create(Request $request)
    {
        // Mengirim data dari modal tambah ke database
        \App\Models\DataSantri::create($request->all);
    }

    public function store(Request $request)
    {
        $input_santri = $request->all();

        //  Array 1 dimensi
        $id = DB::select("SHOW TABLE STATUS LIKE 'data_santri'");
        $next_id = $id[0]->Auto_increment;
        // jika id terbaru lebih dari sama dengan 10 maka keluaranya 00 + id terbaru
        if ($next_id >= 10) {
            $input_santri['id'] = '0' . $next_id;
            DataSantri::create($input_santri);
        } else {
            // selain itu maka 0 + id terbaru
            // default value dari nomor karyawan adalah 0 + id terbaru
            $input_santri['id'] = '00' . $next_id;
            // tambah data
            DataSantri::create($input_santri);
        }
        return redirect()->route('data-santri.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit_santri = DataSantri::findOrFail($id);
        return view('pengurus.edit_santri')->with([
            'datas' => $edit_santri
        ]);
    }

    public function update(Request $request, $id)
    {
        $update_santri = $request->all();
        $update_data = DataSantri::findOrFail($id);
        $update_data->update($update_santri);
        return redirect('data-santri');
    }

    public function destroy($id)
    {
        $update_data = DataSantri::findOrFail($id);
        $update_data->delete();
        return redirect()->route('data-santri.index');
    }

    public function cetakPdf()
    {
        $data_santri = DataSantri::orderBy('angkatan', 'ASC')->get();
        return view('pengurus.cetak_pdf', [
            'datas' => $data_santri
        ]);
    }
}
