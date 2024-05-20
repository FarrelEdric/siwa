<?php

namespace App\Http\Controllers;

use App\Models\kegiatanModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class kegiatan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Berita Kegiatan Warga',
            'list' => ['Home', 'Kegiatan']
        ];

        $page = (object)[
            'title' => 'Daftar sosialisasi yang ada'
        ];

        $activeMenu = 'kegiatan';

        $model  = kegiatanModel::where('jenis_berita', '=', 'berita')->get();
        return view('kegiatan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'data' => $model]);
    }

    public function sosialisasi()
    {
        $breadcrumb = (object)[
            'title' => 'Berita Kegiatan Warga',
            'list' => ['Home', 'Sosialisasi']
        ];

        $page = (object)[
            'title' => 'Daftar sosialisasi yang ada'
        ];

        $activeMenu = 'kegiatan';

        $model  = kegiatanModel::where('jenis_berita', '=', 'sosialisasi')->get();
        return view('kegiatan.sosialisasi', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'data' => $model]);
    }


    public function list(Request $request)
    {
        $kegiatan = kegiatanModel::select('id_kegiatan', 'jenis_kegiatan', 'tgl_kegiatan', 'lokasi')->get();

        return DataTables::of($kegiatan)
            ->addIndexColumn()
            ->addColumn('aksi', function ($kegiatan) {
                $btn = '<a href="' . url('/kegiatan/' . $kegiatan->id_kegiatan) . '" class="btn btn-primary" style="width: 40px; height: 40px; margin-right: 5px;"><i class="fas fa-eye"></i></a> ';
                $btn .= '<a href="' . url('/kegiatan/' . $kegiatan->id_kegiatan . '/edit') . '" class="btn btn-warning" style="width: 40px; height: 40px; margin-right: 5px;"><i class="fas fa-edit"></i></a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/kegiatan/' . $kegiatan->id_kegiatan) . '">' . csrf_field() . method_field('DELETE')
                    . '<button type="submit" class="btn btn-danger" style="width: 40px; height: 40px;" onclick="return confirm(\'Apakah Anda Yakin Menghapus Data Ini ? \');"><i class="fas fa-trash-alt"></i></button></form>';
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
            'title' => 'Tambah Kegiatan',
            'list' => ['Home', 'Kegiatan', 'Tambah']
        ];

        $page = (object)[
            'title' => 'Tambah kegiatan baru'
        ];

        $activeMenu = 'kegiatan';

        return view('kegiatan.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|unique:user,id_user',
            'jenis_kegiatan' => 'required|string|max:100',
            'tgl_kegiatan' => 'required|date',
            'lokasi' => 'required|string|max:100',
        ]);

        kegiatanModel::create([
            'id_user' => $request->id_user,
            'jenis_kegiatan' => $request->jenis_kegiatan,
            'tgl_kegiatan' => $request->tgl_kegiatan,
            'lokasi' => $request->lokasi
        ]);

        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kegiatan = kegiatanModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Detail Kegiatan',
            'list' => ['Home', 'Kegiatan', 'Detail']
        ];

        $page = (object)[
            'title' => 'Detail Kegiatan'
        ];

        $activeMenu = 'kegiatan';
        return view('kegiatan.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kegiatan' => $kegiatan, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kegiatan = kegiatanModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Edit Kegiatan',
            'list' => ['Home', 'Kegiatan', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit Kegiatan'
        ];

        $activeMenu = 'kegiatan';

        return view('kegiatan.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kegiatan' => $kegiatan, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'id_user' => 'required|exists:users,id_user',
            'jenis_kegiatan' => 'required|string|max:100',
            'tgl_kegiatan' => 'required|date',
            'lokasi' => 'required|string|max:100',
        ]);

        $kegiatan = kegiatanModel::findOrFail($id);
        $kegiatan->update($request->all());

        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        kegiatanModel::findOrFail($id)->delete();
        return redirect('/kegiatan')->with('success', 'Kegiatan berhasil dihapus');
    }
}
