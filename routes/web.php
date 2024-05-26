<?php

use App\Http\Controllers\organisasi;
use App\Http\Controllers\surat;
use App\Http\Controllers\bantuan_sosial;
use App\Http\Controllers\penduduk_keluar;
use App\Http\Controllers\penduduk_masuk;
use App\Http\Controllers\keuangan;
use App\Http\Controllers\register;
use App\Http\Controllers\loginController;
use App\Http\Controllers\penduduk;
use App\Http\Controllers\kegiatan;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\organisasiController;
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
// route kegiatan
// Route::resource('kegiatan', kegiatan::class);
// Route::post('/kegiatan/list', [kegiatan::class, 'list']);
// Route::get('/kegiatan/create', [kegiatan::class, 'create']);
// Route::post('/kegiatan', [kegiatan::class, 'store']);

// Group route for kegiatan

Route::get('/login', [loginController::class, 'login'])->middleware('guest');
Route::get('/register', [register::class, 'register'])->name('register');

Route::group(['prefix' => 'kegiatan'], function () {
    Route::get('/', [kegiatan::class, 'index']);
    Route::post('/list', [kegiatan::class, 'list']);
    Route::get('/create', [kegiatan::class, 'create']);
    Route::post('/', [kegiatan::class, 'store']);
    Route::get('/{id}', [kegiatan::class, 'show']);
    Route::get('/{id}/edit', [kegiatan::class, 'edit']);
    Route::put('/{id}', [kegiatan::class, 'update']);
    Route::delete('/{id}', [kegiatan::class, 'destroy']);
});
// route sosialisasi
Route::group(['prefix' => 'sosialisasi'], function () {
    Route::get('/', [kegiatan::class, 'sosialisasi']);
});

// Group route for keuangan
Route::group(['prefix' => 'keuangan'], function () {
    Route::get('/', [keuangan::class, 'index']);
    Route::post('/list', [keuangan::class, 'list']);
});

// Group route for penduduk
Route::group(['prefix' => 'penduduk'], function () {
    Route::get('/', [penduduk::class, 'index']);
    Route::post('/list', [penduduk::class, 'list']);
    Route::get('/create', [penduduk::class, 'create']);
    Route::post('/', [penduduk::class, 'store']);
    Route::get('/{id}', [penduduk::class, 'show']);
    Route::get('/{id}/edit', [penduduk::class, 'edit']);
    Route::put('/{id}', [penduduk::class, 'update']);
    Route::delete('/{id}', [penduduk::class, 'destroy']);
});

// Group route for bansos
Route::group(['prefix' => 'bantuanSosial'], function () {
    Route::get('/', [bantuan_sosial::class, 'index']);
    Route::post('/list', [bantuan_sosial::class, 'list']);
});

// Group route for surat
Route::group(['prefix' => 'surat'], function () {
    Route::resource('/', surat::class);
    Route::post('/list', [surat::class, 'list']);
    Route::get('/create', [surat::class, 'create']);
    Route::post('/', [surat::class, 'store']);
    Route::get('/download/{id}', [surat::class, 'printPDF']);
});

// route login
Route::get('/', function () {
    return view('index');
});


// Route::post('/register', [register::class, 'register'])->name('register');
Route::post('proses_login', [loginController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [loginController::class, 'logout'])->name('logout');
Route::post('proses_register', [register::class, 'proses_register'])->name('proses_register');

// route keuangan
Route::get('keuangan', [keuangan::class, 'index'])->name('keuangan');
Route::post('keuangan/list', [keuangan::class, 'list']);

// route penduduk
Route::get('penduduk', [penduduk::class, 'index'])->name('penduduk');
Route::post('penduduk/list', [penduduk::class, 'list']);

// route bansos
Route::get('bantuanSosial', [bantuan_sosial::class, 'index'])->name('penduduk');
Route::post('bantuanSosial/list', [bantuan_sosial::class, 'list']);





Route::group(['middleware' => 'auth'], function () {

    // route keuangan
    Route::get('keuangan', [keuangan::class, 'index'])->name('keuangan');
    Route::post('keuangan/list', [keuangan::class, 'list']);
    Route::get('keuangan/{id}', [keuangan::class, 'show']);

    // route penduduk
    Route::get('penduduk', [penduduk::class, 'index'])->name('penduduk');
    Route::post('penduduk/list', [penduduk::class, 'list']);

    // route bansos
    Route::get('bantuanSosial', [bantuan_sosial::class, 'index'])->name('penduduk');
    Route::post('bantuanSosial/list', [bantuan_sosial::class, 'list']);

    //PENDUDUK
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');


    //struktur organisasi
    Route::get('organisasi', [organisasiController::class, 'index'])->name('organisasi');
    Route::post('organisasi/list', [organisasiController::class, 'list']);
    Route::get('organisasi/{id}', [organisasiController::class, 'show']);
});
