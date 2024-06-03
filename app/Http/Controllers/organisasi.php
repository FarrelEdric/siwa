<?php

namespace App\Http\Controllers;

use App\Models\strukturOrganisasiModel;
use App\Models\suratModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class organisasi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Struktur Organisasi',
            'list' => ['Home', 'organisasi']
        ];

        $page = (object)[
            'title' => 'Daftar Struktur Organisasi'
        ];

        $activeMenu = 'struktur_organisasi';
        return view('organisasi.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }


    public function list(Request $request)
    {
        $struktur_organisasi = strukturOrganisasiModel::all();
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumb = (object)[
            'title' => 'Tambah Pengurus',
            'list' => ['Home', 'Organisasi', 'Tambah']
        ];
        $page = (object)[
            'title' => 'Tambah Pengurus Organisasi baru'
        ];
        $level = strukturOrganisasiModel::all(); //ambil data level untuk ditampilkan di form
        $activeMenu = 'struktur_organisasi'; //set menu yang sedang aktif

        return view('struktur_organisasi.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'level' => $level, 'activeMenu' => $activeMenu]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
