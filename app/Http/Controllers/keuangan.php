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
        $levels = keuanganModel::all();

        // 
        return DataTables::of($levels)
            ->addIndexColumn() // Menambahkan kolom index / no urut (default nmaa kolom: DT_RowINdex)
            ->addColumn('aksi', function ($level) {
                $btn = '<a   href="' . url('/level/' . $level->id_level) . '" class="btn btn-primary" >Detail</a> ';
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
