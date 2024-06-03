<?php

namespace App\Http\Controllers;

use App\Models\sosialisasiModel;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class sosialisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Data Sosialisasi',
            'list' => ['Home', 'Data Sosialisasi']
        ];

        $page = (object)[
            'title' => 'Data Sosialisasi Yang Tersedia'
        ];

        $activeMenu = 'sosialisasi';
        return view('sosialisasi.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $sosialisasi = sosialisasiModel::all();

        return DataTables::of($sosialisasi)
            ->addIndexColumn()
            ->addColumn('aksi', function ($sosialisasi) {
                $btn = '<a href="' . url('/sosialisasi/' . $sosialisasi->id_sosialisasi) . '" class="btn btn-sm mb-1" style="margin-right: 5px; width: 80px; background-color: #1D3752; color: white;"><i class="fas fa-eye"></i> Detail</a>';
                $btn .= '<a href="' . url('/sosialisasi/' . $sosialisasi->id_sosialisasi . '/edit') . '" class="btn btn-warning btn-sm mb-1" style="margin-right: 5px; width: 80px;"><i class="fas fa-edit"></i> Edit</a>';
                $btn .= '<form class="d-inline-block mb-2" method="POST" action="' . url('/sosialisasi/' . $sosialisasi->id_sosialisasi) . '">' . csrf_field() . method_field('DELETE')
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
            'title' => 'Tambah Data Sosialisasi',
            'list' => ['Home', 'Data Sosialisasi', 'Tambah Data Sosialisasi']
        ];

        $page = (object)[
            'title' => 'Tambah Data Sosialisasi'
        ];

        $activeMenu = 'sosialisasi';

        return view('sosialisasi.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(Request $request)
    {
        $request->validate([
            'id_sosialisasi' => 'required|integer|unique:user,id_user',
            'nama_sosialisasi' => 'required|string|max:100',
            'ket_sosialisasi' => 'required|string|max:500'
        ]);

        try {
            //code...

            pendudukModel::create([
                'id_sosialisasi' => $request->id_sosialisasi,
                'nama_sosialisasi' => $request->nama_sosialisasi,
                'ket_sosialisasi' => $request->ket_sosialisasi
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }

        return redirect('/sosialisasi')->with('success', 'Data Sosialisasi berhasil disimpan');
    }*/
    public function store(Request $request)
    {
        $request->validate([
            'id_sosialisasi' => 'required',
            'nama_sosialisasi' => 'required',
            'ket_sosialisasi' => 'required',
            'file_upload' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Handle file upload
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);

            // Save data to the database
            sosialisasi::create([
                'id_sosialisasi' => $request->id_sosialisasi,
                'nama_sosialisasi' => $request->nama_sosialisasi,
                'ket_sosialisasi' => $request->ket_sosialisasi,
                'file_path' => $filename,
            ]);

            return redirect('sosialisasi')->with('success', 'Data Sosialisasi berhasil disimpan.');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah file.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sosialisasi = sosialisasiModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Detail Data Sosialisasi',
            'list' => ['Home', 'Data Seluruh Sosialisasi', 'Detail Data Sosialisasi']
        ];

        $page = (object)[
            'title' => 'Detail Data Sosialisasi'
        ];

        $activeMenu = 'sosialisasi';
        return view('sosialisasi.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'sosialisasi' => $sosialisasi, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sosialisasi = sosialisasiModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Edit Data Sosialisasi',
            'list' => ['Home', 'Data Sosialisasi', 'Edit Data Sosialisasi']
        ];

        $page = (object)[
            'title' => 'Edit Data Sosialisasi'
        ];

        $activeMenu = 'sosialisasi';

        return view('sosialisasi.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'sosialisasi' => $sosialisasi, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sosialisasi = sosialisasiModel::findOrFail($id);

        $request->validate([
            'id_sosialisasi' => 'required|integer|unique:sosialisasi,id_sosialisasi,' . $id,
            'nama_sosialisasi' => 'required|string|max:100',
            'ket_sosialisasi' => 'required|string|max:500',
            'file_upload' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Update fields
        $sosialisasi->id_sosialisasi = $request->id_sosialisasi;
        $sosialisasi->nama_sosialisasi = $request->nama_sosialisasi;
        $sosialisasi->ket_sosialisasi = $request->ket_sosialisasi;

        // Handle file upload if present
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);

            // Delete old file if exists
            if ($sosialisasi->gambar && file_exists(public_path($sosialisasi->gambar))) {
                unlink(public_path($sosialisasi->gambar));
            }

            $sosialisasi->gambar = 'uploads/' . $filename;
        }

        $sosialisasi->save();

        return redirect('/sosialisasi')->with('success', 'Data Sosialisasi berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        sosialisasiModel::findOrFail($id)->delete();
        return redirect('/sosialisasi')->with('success', 'Data Sosialisasi berhasil dihapus');
    }
}
