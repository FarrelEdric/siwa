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
            'title' => 'Rekap Keuangan',
            'list' => ['Home', 'Rekap Keuangan']
        ];
    
        $page = (object)[
            'title' => 'Daftar Keuangan yang ada'
        ];
    
        $activeMenu = 'keuangan';
    
        // Menghitung saldo dari semua transaksi
        $saldo = keuanganModel::sum('pemasukan_iuran') - keuanganModel::sum('pengeluaran_iuran');
    
        return view('keuangan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'saldo' => $saldo]);
    }


    public function list(Request $request)
    {
        $keuangans = keuanganModel::all();

        // 
        return DataTables::of($keuangans)
            ->addIndexColumn() // Menambahkan kolom index / no urut (default nmaa kolom: DT_RowINdex)
            ->addColumn('aksi', function ($keuangan) {
                // $btn = '<a   href="' . url('/keuangan/' . $keuangan->id_keuangan) . '" class="btn btn-primary" >Detail</a> ';
                $btn = '<a href="' . url('/keuangan/' . $keuangan->id_keuangan) . '" class="btn btn-sm mb-1" style="margin-right: 5px; width: 80px; background-color: #1D3752; color: white;"><i class="fas fa-eye"></i> Detail</a>';
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
        $breadcrumb = (object)[
            'title' => 'Tambah Rekap Keuangan',
            'list' => ['Home', 'Rekap Keuangan', 'Tambah Rekap Keuangan']
        ];

        $page = (object)[
            'title' => 'Tambah Data Keuangan'
        ];

        $activeMenu = 'keuangan';
        return view('keuangan.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'keterangan' => 'required|string',
            'jenis_transaksi' => 'required|in:pemasukan,pengeluaran',
            'nominal' => 'required|numeric',
        ]);

        $keuangan = new keuanganModel();
        $keuangan->date = $request->date;
        $keuangan->keterangan = $request->keterangan;
        
        // Sesuaikan logika untuk menyimpan data sesuai jenis transaksi
        if ($request->jenis_transaksi == 'pemasukan') {
            $keuangan->pemasukan_iuran = $request->nominal;
            $keuangan->pengeluaran_iuran = 0;
        } else {
            $keuangan->pemasukan_iuran = 0;
            $keuangan->pengeluaran_iuran = $request->nominal;
        }
        
        $keuangan->save();

        return redirect('keuangan')->with('success', 'Data keuangan berhasil ditambahkan.');
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
        $keuangan = keuanganModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Edit keuangan',
            'list' => ['Home', 'keuangan', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit Data Keuangan'
        ];

        $activeMenu = 'keuangan';
        return view('keuangan.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'keuangan' => $keuangan, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'date' => 'required|date',
            'keterangan' => 'required|string',
            'pemasukan_iuran' => 'required|numeric',
            'pengeluaran_iuran' => 'required|numeric',
        ]);

        $keuangan = keuanganModel::findOrFail($id);
        $keuangan->date = $request->date;
        $keuangan->keterangan = $request->keterangan;
        $keuangan->pemasukan_iuran = $request->pemasukan_iuran;
        $keuangan->pengeluaran_iuran = $request->pengeluaran_iuran;
        $keuangan->save();

        return redirect('keuangan')->with('success', 'Data keuangan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keuangan = keuanganModel::findOrFail($id);
        $keuangan->delete();

        return redirect('keuangan')->with('success', 'Data keuangan berhasil dihapus.');
    }
}