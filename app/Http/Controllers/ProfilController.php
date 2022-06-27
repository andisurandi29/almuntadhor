<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tampilAdmin()
    {
        $user = User::where('id', Auth::user()->id)->first();
        
        return view('admin.account', [
            "title" => "Profil", 'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $image_baru = $request->file('profil');

        if($image_baru == '') {
            $gambar = $image_lama;
            $deskripsi = "Gambar Lama";
        } else {
            $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
            $gambar = $new_image;
            $image_baru->move(public_path('profil'), $new_image); 
        }

        $content = User::findOrFail($id);
        $content->update(array(
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
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

    public function passwordPengurus() 
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
