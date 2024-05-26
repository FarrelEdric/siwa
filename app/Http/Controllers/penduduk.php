<?php

namespace App\Http\Controllers;

use App\Models\pendudukModel;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class penduduk extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Data Seluruh Warga',
            'list' => ['Home', 'Data Seluruh Warga']
        ];

        $page = (object)[
            'title' => 'Daftar Warga yang ada'
        ];

        $activeMenu = 'penduduk';
        return view('penduduk.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $penduduk = pendudukModel::all();

        return DataTables::of($penduduk)
            ->addIndexColumn()
            ->addColumn('aksi', function ($penduduk) {
                $btn = '<a href="' . url('/penduduk/' . $penduduk->id_penduduk) . '" class="btn btn-sm mb-1" style="margin-right: 5px; width: 80px; background-color: #1D3752; color: white;"><i class="fas fa-eye"></i> Detail</a>';
                $btn .= '<a href="' . url('/penduduk/' . $penduduk->id_penduduk . '/edit') . '" class="btn btn-warning btn-sm mb-1" style="margin-right: 5px; width: 80px;"><i class="fas fa-edit"></i> Edit</a>';
                // $btn .= '<form class="d-inline-block mb-2" method="POST" action="' . url('/penduduk/' . $penduduk->id_penduduk) . '">' . csrf_field() . method_field('DELETE')
                //     . '<button type="submit" class="btn btn-danger btn-sm" style="width: 80px;" onclick="return confirm(\'Apakah Anda Yakin Menghapus Data Ini ? \');"><i class="fas fa-trash-alt"></i> Hapus</button></form>';
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
            'title' => 'Tambah Data Warga',
            'list' => ['Home', 'Data Seluruh Warga', 'Tambah Data Warga']
        ];

        $page = (object)[
            'title' => 'Tambah Data Warga'
        ];

        $activeMenu = 'penduduk';

        return view('penduduk.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required|string|max:16',
            'nik_penduduk' => 'required|string|max:16',
            'nama_penduduk' => 'required|string|max:100',
            'pekerjaan_penduduk' => 'required|string|max:100',
            'status_penduduk' => 'required|string|max:100',
            'tgl_lahir_penduduk' => 'required|date',
            'no_tlp_penduduk' => 'required|string|max:15',
            'alamat' => 'required|string|max:255', // Tambahkan validasi alamat
        ]);

        pendudukModel::create([
            'no_kk' => $request->no_kk,
            'nik_penduduk' => $request->nik_penduduk,
            'nama_penduduk' => $request->nama_penduduk,
            'pekerjaan_penduduk' => $request->pekerjaan_penduduk,
            'status_penduduk' => $request->status_penduduk,
            'tgl_lahir_penduduk' => $request->tgl_lahir_penduduk,
            'no_tlp_penduduk' => $request->no_tlp_penduduk,
            'alamat' => $request->alamat, // Tambahkan alamat
        ]);

        return redirect('/penduduk')->with('success', 'Data Warga berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penduduk = pendudukModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Detail Data Warga',
            'list' => ['Home', 'Data Seluruh Warga', 'Detail Data Warga']
        ];

        $page = (object)[
            'title' => 'Detail Data Warga'
        ];

        $activeMenu = 'penduduk';
        return view('penduduk.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'penduduk' => $penduduk, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penduduk = pendudukModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Edit Data Warga',
            'list' => ['Home', 'Data Seluruh Warga', 'Edit Data Warga']
        ];

        $page = (object)[
            'title' => 'Edit Data Warga'
        ];

        $activeMenu = 'penduduk';

        return view('penduduk.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'penduduk' => $penduduk, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'no_kk' => 'required|string|max:16',
            'nik_penduduk' => 'required|string|max:16',
            'nama_penduduk' => 'required|string|max:100',
            'pekerjaan_penduduk' => 'required|string|max:100',
            'status_penduduk' => 'required|string|max:100',
            'tgl_lahir_penduduk' => 'required|date',
            'no_tlp_penduduk' => 'required|string|max:15',
            'alamat' => 'required|string|max:255', // Tambahkan validasi alamat
        ]);

        $penduduk = pendudukModel::findOrFail($id);
        $penduduk->update($request->all());

        return redirect('/penduduk')->with('success', 'Data Warga berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pendudukModel::findOrFail($id)->delete();
        return redirect('/penduduk')->with('success', 'Data Warga berhasil dihapus');
    }
}