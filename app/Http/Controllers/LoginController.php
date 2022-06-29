<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ChangePasswordRequest;
// use Hash;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password')))
        {
            if (Auth::user()->level == 'admin') {
                return redirect('/dashboard-admin');
            } elseif (Auth::user()->level == 'pengurus') {
                return redirect('/dashboard-pengurus');
            } elseif (Auth::user()->level == 'pendidik') {
                return redirect('/dashboard-pengurus');
            } else {
                return redirect('/dashboard');
            }
        }
        Session::flash('error', 'Username atau password yang Anda masukkan salah');
        return redirect('/login-page');
    }

     public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
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

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {
        $old_password   = auth()->user()->password;
        $user_id        = auth()->user()->id;

        if (Hash::check($request->input('old_password'), $old_password)) {
            $user = User::findOrFail($user_id);

            $user->password = Hash::make($request->input('password'));

            if ($user->save()) {
                return redirect('profil-admin')->with('success', 'Password berhasil diubah');
            } else {
                return redirect('profil-admin')->with('failed', 'Password lama invalid');
            }
        } else {
            return redirect('profil-admin')->with('failed', 'Password lama invalid');
        }
    }

    public function passwordUser(ChangePasswordRequest $request)
    {
        $old_password   = auth()->user()->password;
        $user_id        = auth()->user()->id;

        if (Hash::check($request->input('old_password'), $old_password)) {
            $user = User::findOrFail($user_id);

            $user->password = Hash::make($request->input('password'));

            if ($user->save()) {
                return redirect('profil-user')->with('success', 'Password berhasil diubah');
            } else {
                return redirect('profil-user')->with('failed', 'Password lama invalid');
            }
        } else {
            return redirect('profil-user')->with('failed', 'Password lama invalid');
        }
    }

    public function passwordPengurus(ChangePasswordRequest $request)
    {
        $old_password   = auth()->user()->password;
        $user_id        = auth()->user()->id;

        if (Hash::check($request->input('old_password'), $old_password)) {
            $user = User::findOrFail($user_id);

            $user->password = Hash::make($request->input('password'));

            if ($user->save()) {
                return redirect('akun-saya')->with('success', 'Password berhasil diubah');
            } else {
                return redirect('akun-saya')->with('failed', 'Password lama invalid');
            }
        } else {
            return redirect('akun-saya')->with('failed', 'Password lama invalid');
        }
    }
}
