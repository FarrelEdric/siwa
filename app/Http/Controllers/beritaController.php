<?php

namespace App\Http\Controllers;

use App\Models\beritaModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class beritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Data Berita Warga',
            'list' => ['Home', 'Data Berita Warga']
        ];

        $page = (object)[
            'title' => 'Data Berita Warga Yang Tersedia'
        ];

        $activeMenu = 'berita';
        if (Auth::user()->level_id == 1) {


            return view('berita.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
        }
        $berita = beritaModel::all();
        return view('berita.user.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'berita' => $berita]);
    }

    public function list(Request $request)
    {
        $berita = beritaModel::all();

        return DataTables::of($berita)
            ->addIndexColumn()
            ->addColumn('aksi', function ($berita) {
                $btn = '<a href="' . url('/berita/' . $berita->id_berita) . '" class="btn btn-sm mb-1" style="margin-right: 5px; width: 80px; background-color: #1D3752; color: white;"><i class="fas fa-eye"></i> Detail</a>';
                $btn .= '<a href="' . url('/berita/' . $berita->id_berita . '/edit') . '" class="btn btn-warning btn-sm mb-1" style="margin-right: 5px; width: 80px;"><i class="fas fa-edit"></i> Edit</a>';
                $btn .= '<form class="d-inline-block mb-2" method="POST" action="' . url('/berita/' . $berita->id_berita) . '">' . csrf_field() . method_field('DELETE')
                    . '<button type="submit" class="btn btn-danger btn-sm" style="width: 80px;" onclick="return confirm(\'Apakah Anda Yakin Menghapus Data Sosialisasi Ini ? \');"><i class="fas fa-trash-alt"></i> Hapus</button></form>';
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
            'title' => 'Tambah Data Berita',
            'list' => ['Home', 'Data Berita', 'Tambah Data Berita']
        ];

        $page = (object)[
            'title' => 'Tambah Data Berita'
        ];

        $activeMenu = 'berita';

        return view('berita.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nama_berita' => 'required',
            'waktu_pel_berita' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'file_upload' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Handle file upload
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);

            // Save data to the database
            beritaModel::create([
                'id_berita' => $request->id_berita,
                'nama_berita' => $request->nama_berita,
                'waktu_pel_berita' => $request->waktu_pel_berita,
                'deskripsi' => $request->deskripsi,
                'gambar' => $filename,
                'lokasi' => $request->lokasi
            ]);

            return redirect('/kegiatan')->with('success', 'Berita Baru berhasil disimpan.');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah file.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $berita = beritaModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Detail Data Berita',
            'list' => ['Home', 'Data Seluruh Berita', 'Detail Data Berita']
        ];

        $page = (object)[
            'title' => 'Detail Data Berita'
        ];

        $activeMenu = 'berita';
        return view('berita.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'berita' => $berita, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = beritaModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Edit Data Berita',
            'list' => ['Home', 'Data Berita', 'Edit Data Berita']
        ];

        $page = (object)[
            'title' => 'Edit Data Berita'
        ];

        $activeMenu = 'berita';

        return view('berita.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'berita' => $berita, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_berita' => 'required',
            'waktu_pel_berita' => 'required',
            'lokasi' => 'required',
            'file_upload' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $berita = beritaModel::findOrFail($id);

        // Handle file upload if present
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);

            // Delete old file if exists
            if ($berita->gambar && file_exists(public_path($berita->gambar))) {
                unlink(public_path($berita->gambar));
            }
        }


        $berita->update([
            'nama_berita' => $request->nama_berita,
            'waktu_pel_berita' => $request->waktu_pel_berita,
            'lokasi' => $request->lokasi,
            'gambar' => $filename
        ]);

        return redirect('/berita')->with('success', 'Data Berita berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        beritaModel::findOrFail($id)->delete();
        return redirect('/berita')->with('success', 'Data Berita berhasil dihapus');
    }
}
