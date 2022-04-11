<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;


class PembayaranController extends Controller
{
    public function index()
    {
        $data_pembayaran = Pembayaran::get();
        return view('admin.v_pembayaran', [
            'colleges' => $data_pembayaran
        ]);

    }

    public function create()
    {
        // Mengirim data dari modal tambah ke database
        \App\Models\Pembayaran::create($request->all);
    }

    public function store(Request $request)
    {
        $input_data = $request->all();

        //  Array 1 dimensi
        $id = DB::select("SHOW TABLE STATUS LIKE 'data_pembayaran'");
        $next_id = $id[0]->Auto_increment;
        // jika id terbaru lebih dari sama dengan 10 maka keluaranya 00 + id terbaru
        if ($next_id >= 10) {
            $input_data['id'] = '0' . $next_id;
            Pembayaran::create($input_data);
        } else {
            // selain itu maka 0 + id terbaru
            // default value dari nomor karyawan adalah 0 + id terbaru
            $input_data['id'] = '00' . $next_id;
            // tambah data
            Pembayaran::create($input_data);
        }
        return redirect()->route('data-pembayaran.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data_pembayaran = Pembayaran::findOrFail($id);
        return view('admin.edit_pembayaran')->with([
            'colleges' => $data_pembayaran
        ]);
    }

    public function update(Request $request, $id)
    {
        $input_update = $request->all();
        $data_spesifik = Pembayaran::findOrFail($id);
        $data_spesifik->update($input_update);
        return redirect('data-pembayaran');
    }

    public function destroy($id)
    {
        $data_spesifik = Pembayaran::findOrFail($id);
        $data_spesifik->delete();
        return redirect()->route('data-pembayaran.index');
    }

    public function cetakForm()
    {
        return view('admin.cetak_form');
    }

    public function cetakPertanggal($tglawal, $tglakhir)
    {
        $cetakPertanggal = Pembayaran::orderBy('tanggal', 'asc')->whereBetween('tanggal', [$tglawal, $tglakhir])->get();
        return view('admin.cetak_pertanggal', [
            'colleges' => $cetakPertanggal
        ]);
    }

}
