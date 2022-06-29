<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePasswordRequest;

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
        // $image_baru = $request->file('foto');
        // $new_image = rand() .'.'. $image_baru->getClientOriginalExtension();
        

        // $content = array(
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'level' => $request->level,
        //     'kelas' => $request->kelas,
        //     'foto' => $new_image,
        //     'tgl_lahir' => $request->tgl_lahir,
        //     'angkatan' => $request->angkatan,
        //     'alamat' => $request->alamat,
        //     'nama_ayah' => $request->nama_ayah,
        //     'nama_ibu' => $request->nama_ibu,
        //     'no_hp' => $request->no_hp,
        // );

        // $image_baru->move(public_path('profil'), $new_image); 

        // User::create($content);

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

    // public function passwordUser(ChangePasswordRequest $request)
    // {
    //     $old_password   = auth()->user()->password;
    //     $user_id        = auth()->user()->id;

    //     if (Hash::check($request->input('old_password'), $old_password)) {
    //         $user = User::findOrFail($user_id);

    //         $user->password = Hash::make($request->input('password'));

    //         if ($user->save()) {
    //             return redirect('profil-user')->with('success', 'Password berhasil diubah');
    //         } else {
    //             return redirect('profil-user')->with('failed', 'Password lama invalid');
    //         }
    //     } else {
    //         return redirect('profil-user')->with('failed', 'Password lama invalid');
    //     }
    // }

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
