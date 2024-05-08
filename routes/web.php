<?php

use App\Http\Controllers\surat;
use App\Http\Controllers\bantuan_sosial;
use App\Http\Controllers\penduduk_keluar;
use App\Http\Controllers\penduduk_masuk;
use App\Http\Controllers\keuangan;
use App\Http\Controllers\register;
use App\Http\Controllers\loginController;
use App\Http\Controllers\penduduk;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route surat
Route::resource('surat', surat::class);
Route::post('/list', [surat::class, 'list']);
Route::get('/surat/create', [surat::class, 'create']);
Route::post('/surat', [surat::class, 'store']);

// route login
Route::get('/', [loginController::class, 'login']);
Route::get('/register', [register::class, 'register'])->name('register');
// Route::post('/register', [register::class, 'register'])->name('register');
Route::post('proses_login', [loginController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [loginController::class, 'logout'])->name('logout');
Route::post('proses_register', [register::class, 'proses_register'])->name('proses_register');


Route::group(['middleware' => ['auth']



], function(){
        // route keuangan
    Route::get('keuangan', [keuangan::class, 'index'])->name('keuangan');
    Route::post('keuangan/list', [keuangan::class, 'list']);

    // route penduduk
    Route::get('penduduk', [penduduk::class, 'index'])->name('penduduk');
    Route::post('penduduk/list', [penduduk::class, 'list']);

    // route bansos
    Route::get('bantuanSosial', [bantuan_sosial::class, 'index'])->name('penduduk');
    Route::post('bantuanSosial/list', [bantuan_sosial::class, 'list']);
});
