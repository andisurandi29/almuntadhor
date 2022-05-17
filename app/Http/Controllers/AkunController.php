<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataAkun;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $akunAdmin;
    public $akunSantri;
    public $akunPengurus;
    public $akunPendidik;

    public function index()
    {
        $data_akun = DataAkun::orderBy('level', 'ASC')->paginate(5);
        return view('admin.v_akun', [
            'accounts' => $data_akun, "title" => "Data Akun"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mengirim data dari modal tambah ke database
        \App\Models\DataAkun::create($request->all);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input_akun = $request->all();
        $input_akun['password'] = bcrypt($request->password);


        //  Array 1 dimensi
        $id = DB::select("SHOW TABLE STATUS LIKE 'users'");
        $next_id = $id[0]->Auto_increment;
        // jika id terbaru lebih dari sama dengan 10 maka keluaranya 00 + id terbaru
        if ($next_id >= 10) {
            $input_akun['id'] = '0' . $next_id;
            DataAkun::create($input_akun);
        } else {
            // selain itu maka 0 + id terbaru
            // default value dari nomor karyawan adalah 0 + id terbaru
            $input_akun['id'] = '00' . $next_id;
            // tambah data
            DataAkun::create($input_akun);
        }
        return redirect()->route('data-akun.index')->with('success', 'Akun Berhasil Dibuat!');
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
        $edit_akun = DataAkun::findOrFail($id);
        return view('admin.edit_akun')->with([
            'accounts' => $edit_akun
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
        $update_akun = $request->all();
        $update_akun['password'] = bcrypt($request->password);
        
        $update_data = DataAkun::findOrFail($id);
        $update_data->update($update_akun);
        return redirect('data-akun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $update_data = DataAkun::findOrFail($id);
        $update_data->delete();
        return redirect()->route('data-akun.index');
    }

    public function countAkun()
    {
        $akunAdmin = DB::table('users')->where('level', '=', 'admin')->count();
        $akunSantri = DB::table('users')->where('level', '=', 'santri')->count();
        $akunPengurus = DB::table('users')->where('level', '=', 'pengurus')->count();
        $akunPendidik = DB::table('users')->where('level', '=', 'pendidik')->count();

        return view('admin.dashboard', ["title" => "Dashboard", 'akunAdmin'=>$akunAdmin, 'akunSantri'=>$akunSantri, 'akunPengurus'=>$akunPengurus, 'akunPendidik'=>$akunPendidik]);
    }
}
