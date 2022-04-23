<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Umum
Route::get('/', function () {
    return view('index');
});

Route::get('/login-page', function () {
    return view('login');
});

Route::get('/login-page', [App\Http\Controllers\LoginController::class, 'index'])->name('login-page');
Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/info', function () {
        return view('pages.info');
});

Route::get('/gallery', function () {
        return view('pages.gallery');  
});

Route::group(['middleware' => ['auth','ceklevel:admin']], function() {
    Route::get('/dashboard-admin', function () {
        return view('admin.dashboard');
    });
});

Route::group(['middleware' => ['auth','ceklevel:santri']], function() {
    Route::get('/dashboard', function () {
        return view('users.dashboard');
    });
});

Route::group(['middleware' => ['auth','ceklevel:pengurus,pendidik']], function() {
    Route::get('/dashboard-pengurus', function () {
        return view('pengurus.v_dashboard');
    });
});

// Halaman Users
Route::get('/kehadiran', function () {
    return view('users.kehadiran');
});
Route::get('/nilai', function () {
    return view('users.nilai');
});
Route::get('/tagihan', function () {
    return view('users.tagihan');
});
Route::get('/tutorial', function () {
    return view('users.tutorial');
});
Route::get('/jadwal', function () {
    return view('users.jadwal');
});
Route::get('/hafalan', function () {
    return view('users.hafalan');
});
Route::get('/pelanggaran', function () {
    return view('users.pelanggaran');
});
Route::get('/pengumuman', function () {
    return view('users.pengumuman');
});
Route::get('/privateinfo', function () {
    return view('users.privateinfo');
});
Route::get('/hubpengurus', function () {
    return view('users.hubpengurus');
});
Route::get('/account', function () {
    return view('users.account');
});


// Halaman Administrator
Route::get('data-akun', [App\Http\Controllers\AkunController::class, 'index'])->name('data-akun.index');
Route::post('/data-akun/create', 'AkunController@create')->name('data-akun.create');
Route::post('/data-akun/store', 'AkunController@store')->name('data-akun.store');;
Route::get('/data-akun/edit/{id?}', 'AkunController@edit')->name('data-akun.edit');
Route::put('/data-akun/update/{id?}', 'AkunController@update')->name('data-akun.update');
Route::delete('/data-akun/destroy/{id?}', 'AkunController@destroy')->name('data-akun.destroy');

// Data Pembayaran
Route::get('data-pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('data-pembayaran.index');
Route::post('/data-pembayaran/create', 'PembayaranController@create')->name('data-pembayaran.create');
Route::post('/data-pembayaran/store', 'PembayaranController@store')->name('data-pembayaran.store');;
Route::get('/data-pembayaran/edit/{id?}', 'PembayaranController@edit')->name('data-pembayaran.edit');
Route::put('/data-pembayaran/update/{id?}', 'PembayaranController@update')->name('data-pembayaran.update');
Route::delete('/data-pembayaran/destroy/{id?}', 'PembayaranController@destroy')->name('data-pembayaran.destroy');
Route::get('/data-pembayaran/cetak-form', 'PembayaranController@cetakForm')->name('data-pembayaran.cetak-form');
Route::get('/data-pembayaran/cetak-pertanggal/{tglawal}/{tglakhir}', 'PembayaranController@cetakPertanggal')->name('data-pembayaran.cetak-pertanggal');

// Data Hafalan
Route::get('data-hafalan', [App\Http\Controllers\HafalanController::class, 'index'])->name('data-hafalan.index');
Route::post('/data-hafalan/create', 'HafalanController@create')->name('data-hafalan.create');
Route::post('/data-hafalan/store', 'HafalanController@store')->name('data-hafalan.store');;
Route::get('/data-hafalan/edit/{id?}', 'HafalanController@edit')->name('data-hafalan.edit');
Route::put('/data-hafalan/update/{id?}', 'HafalanController@update')->name('data-hafalan.update');
Route::delete('/data-hafalan/destroy/{id?}', 'HafalanController@destroy')->name('data-hafalan.destroy');

// Data Santri
Route::get('data-santri', [App\Http\Controllers\SantriController::class, 'index'])->name('data-santri.index');
Route::post('/data-santri/create', 'SantriController@create')->name('data-santri.create');
Route::post('/data-santri/store', 'SantriController@store')->name('data-santri.store');;
Route::get('/data-santri/edit/{id?}', 'SantriController@edit')->name('data-santri.edit');
Route::put('/data-santri/update/{id?}', 'SantriController@update')->name('data-santri.update');
Route::delete('/data-santri/destroy/{id?}', 'SantriController@destroy')->name('data-santri.destroy');
Route::get('/data-santri/cetak', 'SantriController@cetakPdf')->name('data-santri.cetak');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
