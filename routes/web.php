<?php

use App\Http\Controllers\bansosController;
use App\Http\Controllers\organisasi;
use App\Http\Controllers\sosial;
use App\Http\Controllers\surat;
use App\Http\Controllers\bantuan_sosial;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\penduduk_keluar;
use App\Http\Controllers\penduduk_masuk;
use App\Http\Controllers\keuangan;
use App\Http\Controllers\register;
use App\Http\Controllers\loginController;
use App\Http\Controllers\sosialisasiController;
use App\Http\Controllers\penduduk;
use App\Http\Controllers\kegiatan;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\organisasiController;
use App\Http\Controllers\sosialController;
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
Route::post('/register', [register::class, 'register'])->name('register');


// Group route for kegiatan

Route::get('/login', [loginController::class, 'login'])->middleware('guest');
Route::get('/register', [register::class, 'register'])->name('register');

Route::group(['prefix' => 'kegiatan'], function () {
    Route::get('/', [beritaController::class, 'index']);
    Route::post('/list', [beritaController::class, 'list']);
    Route::get('/create', [beritaController::class, 'create']);
    Route::post('/', [beritaController::class, 'store']);
    Route::get('/{id}', [beritaController::class, 'show']);
    Route::get('/{id}/edit', [beritaController::class, 'edit']);
    Route::put('/{id}', [beritaController::class, 'update']);
    Route::delete('/{id}', [beritaController::class, 'destroy']);
});
// route sosialisasi
Route::group(['prefix' => 'sosialisasi'], function () {
    Route::get('/', [kegiatan::class, 'sosialisasi']);
});

// Group route for keuangan
Route::group(['prefix' => 'keuangan'], function () {
    Route::get('/', [keuangan::class, 'index']);
    Route::post('/list', [keuangan::class, 'list']);
    Route::get('/create', [keuangan::class, 'create']);
    Route::post('/', [keuangan::class, 'store']);
    Route::get('/{id}', [keuangan::class, 'show']);
    Route::get('/{id}/edit', [keuangan::class, 'edit']);
    Route::put('/{id}', [keuangan::class, 'update']);
    Route::delete('/{id}', [keuangan::class, 'destroy']);
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
    Route::group(['middleware' => 'noRT'], function () {

        Route::resource('/', surat::class);
        Route::get('/', [surat::class, 'index']);
        Route::post('/list', [surat::class, 'list']);
        Route::get('/create', [surat::class, 'create']);
        Route::post('/', [surat::class, 'store']);
        Route::get('/download/{id}', [surat::class, 'printPDF']);
        Route::put('konfirmasi/{id}', [surat::class, 'update']);
    });
});



// route login
Route::get('/', function () {
    return view('index');
});
Route::get('/', [kegiatan::class, 'landing']);


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
// Group route for bansos
Route::prefix('bansos')->group(function () {
    Route::get('/', [bansosController::class, 'index'])->name('bansos.index');
    Route::post('/list', [bansosController::class, 'list'])->name('bansos.list');
    Route::get('/create', [bansosController::class, 'create'])->name('bansos.create');
    Route::post('/store', [bansosController::class, 'store'])->name('bansos.store');
    Route::get('/edit/{id}', [bansosController::class, 'edit'])->name('bansos.edit');
    Route::put('/update/{id}', [bansosController::class, 'update'])->name('bansos.update');
    Route::delete('/delete/{id}', [bansosController::class, 'destroy'])->name('bansos.destroy');
});

//admin
Route::group(['middleware' => 'auth'], function () {
    //surat admin
    Route::get('admin/surat', [surat::class, 'adminSurat'])->name('surat');
    Route::get('admin/surat', [surat::class, 'adminSurat'])->name('surat')->middleware('noRT');
    Route::get('/surat/delete/{id}', [surat::class, 'batalkanSurat'])->name('surat');


    // route keuangan

    Route::group(['prefix' => 'keuangan'], function () {
        Route::get('/', [keuangan::class, 'index'])->name('keuangan');
        Route::post('/list', [keuangan::class, 'list']);
        Route::get('/create', [keuangan::class, 'create']);
        Route::post('/', [keuangan::class, 'store']);
        Route::get('/{id}', [keuangan::class, 'show']);
        Route::get('/{id}/edit', [keuangan::class, 'edit']);
        Route::put('/{id}', [keuangan::class, 'update']);
        Route::delete('/{id}', [keuangan::class, 'destroy']);
    });

    // route penduduk
    Route::get('penduduk', [penduduk::class, 'index'])->name('penduduk');
    Route::post('penduduk/list', [penduduk::class, 'list']);

    // route bansos
    Route::get('bantuanSosial', [bantuan_sosial::class, 'index'])->name('penduduk');
    Route::get('bantuanSosial', [bantuan_sosial::class, 'index'])->name('penduduk')->middleware('noRT');
    Route::post('bantuanSosial/list', [bantuan_sosial::class, 'list']);

    //PENDUDUK
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');


    //struktur organisasi
    Route::get('organisasi', [organisasiController::class, 'index'])->name('organisasi');
    Route::post('organisasi/list', [organisasiController::class, 'list']);
    //route sosial
    Route::get('organisasi/edit/{id}', [organisasiController::class, 'edit']);
    Route::put('organisasi/{id}', [organisasiController::class, 'update']);
    Route::get('organisasi/{id}', [organisasiController::class, 'show']);

    //route sosialisasi
    Route::group(['prefix' => 'sosialisasi'], function () {
        Route::get('', [sosialController::class, 'index']);
        Route::post('/list', [sosialController::class, 'list']);
        Route::get('/create', [sosialController::class, 'create']);
        Route::post('', [sosialController::class, 'store']);
        Route::get('/{id}', [sosialController::class, 'show']);
        Route::get('/{id}/edit', [sosialController::class, 'edit']);
        Route::put('/{id}', [sosialController::class, 'update']);
        Route::delete('/{id}', [sosialController::class, 'destroy']);
    });
    //route berita
    Route::group(['prefix' => 'berita'], function () {
        Route::get('', [beritaController::class, 'index']);
        Route::post('/list', [beritaController::class, 'list']);
        Route::get('/create', [beritaController::class, 'create']);
        Route::post('', [beritaController::class, 'store']);
        Route::get('/{id}', [beritaController::class, 'show']);
        Route::get('/{id}/edit', [beritaController::class, 'edit']);
        Route::put('/{id}', [beritaController::class, 'update']);
        Route::delete('/{id}', [beritaController::class, 'destroy']);
    });
});
