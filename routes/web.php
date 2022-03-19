<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembayaranController;

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
Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/info', function () {
        return view('pages.info');
});

Route::get('/gallery', function () {
        return view('pages.gallery');  
});



// Halaman Users
Route::get('/dashboard', function () {
    return view('users.dashboard');
});
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
Route::get('/dashboard-admin', function () {
    return view('admin.dashboard-admin');
});
Route::get('/data-pembayaran', function () {
    return view('admin.keuangan.crud_pembayaran');
});


Route::get('data-pembayaran', [App\Http\Controllers\PembayaranController::class, 'index'])->name('data-pembayaran.index');
Route::post('/data-pembayaran/create', 'PembayaranController@create')->name('data-pembayaran.create');
Route::post('/data-pembayaran/store', 'PembayaranController@store')->name('data-pembayaran.store');;
Route::get('/data-pembayaran/edit/{id?}', 'PembayaranController@edit')->name('data-pembayaran.edit');
Route::put('/data-pembayaran/update/{id?}', 'PembayaranController@update')->name('data-pembayaran.update');
Route::delete('/data-pembayaran/destroy/{id?}', 'PembayaranController@destroy')->name('data-pembayaran.destroy');
