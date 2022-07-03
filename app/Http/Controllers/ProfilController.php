<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ProfilController extends Controller
{
    public function tampilAdmin()
    {
        $user = User::where('id', Auth::user()->id)->first();
        
        return view('admin.account', [
            "title" => "Profil", 'user' => $user
        ]);
    }

    public function updateAdmin(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update(array(
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'level' => $request->level,
        ));
        return redirect('profil-admin');
    }

    public function tampilPengurus()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('pengurus.account', [
            'akun' => $user
        ]);
    }

    public function updatePengurus(Request $request, $id)
    {
        $image_lama = $request->old_image;
        $image_baru = $request->file('foto');

        if($image_baru == '') {
            $gambar = $image_lama;
        } else {
            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $gambar = $new_image;
            $image_baru->move(public_path('profil'), $new_image); 
        }

        $updateProfil = User::findOrFail($id);
        $updateProfil->update(array(
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'level' => $request->level,
            'kelas' => $request->kelas,
            'foto' => $gambar,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ));
            
        return redirect('akun-saya');
    }

    public function tampilUser()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('users.account', [
            'accounts' => $user
        ]);
    }

    public function updateUser(Request $request, $id) 
    {
        $image_lama = $request->old_image;
        $image_baru = $request->file('foto');

        if($image_baru == '') {
            $gambar = $image_lama;
        } else {
            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $gambar = $new_image;
            $image_baru->move(public_path('profil'), $new_image); 
        }

        $updateProfil = User::findOrFail($id);
        $updateProfil->update(array(
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'level' => $request->level,
            'kelas' => $request->kelas,
            'foto' => $gambar,
            'tgl_lahir' => $request->tgl_lahir,
            'angkatan' => $request->angkatan,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'no_hp' => $request->no_hp,
        ));
            
        return redirect('profil-user');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
