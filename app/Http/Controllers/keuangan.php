<?php

namespace App\Http\Controllers;

use App\Models\keuanganModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class keuangan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Keuangan',
            'list' => ['Home', 'Keuangan']
        ];

        $page = (object)[
            'title' => 'Daftar Keuangan yang ada'
        ];

        $activeMenu = 'keuangan';
        return view('keuangan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }


    public function list(Request $request)
    {
        $keuangans = keuanganModel::all();

        // 
        return DataTables::of($keuangans)
            ->addIndexColumn() // Menambahkan kolom index / no urut (default nmaa kolom: DT_RowINdex)
            ->addColumn('aksi', function ($keuangan) {
                $btn = '<a   href="' . url('/keuangan/' . $keuangan->id_keuangan) . '" class="btn btn-primary" >Detail</a> ';
                return $btn;
            })

            ->rawColumns(['aksi'])
            ->make(true);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $keuangan = keuanganModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Detail keuangan',
            'list' => ['Home', 'keuangan', 'Detail']
        ];

        $page = (object)[
            'title' => 'Detail keuangan'
        ];

        $activeMenu = 'keuangan';
        return view('keuangan.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'keuangan' => $keuangan, 'activeMenu' => $activeMenu]);
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
