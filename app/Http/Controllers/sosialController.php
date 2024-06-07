<?php

namespace App\Http\Controllers;

use App\Models\sosialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class sosialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Data sosial',
            'list' => ['Home', 'Data sosial']
        ];

        $page = (object)[
            'title' => 'Data sosial Yang Tersedia'
        ];

        $activeMenu = 'sosial';
        if (Auth::user()->level_id == 1) {

            return view('sosial.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
        }
        $sosial = sosialModel::all();
        return view('sosial.user.index', ['breadcrumb' => $breadcrumb, 'sosial' => $sosial, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $sosial = sosialModel::all();

        return DataTables::of($sosial)
            ->addIndexColumn()
            ->addColumn('aksi', function ($sosial) {
                $btn = '<a href="' . url('/sosialisasi/' . $sosial->id_sosial) . '" class="btn btn-sm mb-1" style="margin-right: 5px; width: 80px; background-color: #1D3752; color: white;"><i class="fas fa-eye"></i> Detail</a>';
                $btn .= '<a href="' . url('/sosialisasi/' . $sosial->id_sosial . '/edit') . '" class="btn btn-warning btn-sm mb-1" style="margin-right: 5px; width: 80px;"><i class="fas fa-edit"></i> Edit</a>';
                $btn .= '<form class="d-inline-block mb-2" method="POST" action="' . url('/sosialisasi/' . $sosial->id_sosial) . '">' . csrf_field() . method_field('DELETE')
                    . '<button type="submit" class="btn btn-danger btn-sm" style="width: 80px;" onclick="return confirm(\'Apakah Anda Yakin Menghapus Data sosial Ini ? \');"><i class="fas fa-trash-alt"></i> Hapus</button></form>';
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
            'title' => 'Tambah Data sosial',
            'list' => ['Home', 'Data sosial', 'Tambah Data sosial']
        ];

        $page = (object)[
            'title' => 'Tambah Data sosial'
        ];

        $activeMenu = 'sosial';

        return view('sosial.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(Request $request)
    {
        $request->validate([
            'id_sosial' => 'required|integer|unique:user,id_user',
            'nama_sosial' => 'required|string|max:100',
            'ket_sosial' => 'required|string|max:500'
        ]);

        try {
            //code...

            pendudukModel::create([
                'id_sosial' => $request->id_sosial,
                'nama_sosial' => $request->nama_sosial,
                'ket_sosial' => $request->ket_sosial
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }

        return redirect('/sosial')->with('success', 'Data sosial berhasil disimpan');
    }*/
    public function store(Request $request)
    {

        $request->validate([

            'nama_sosial' => 'required',
            'ket_sosial' => 'required',
            'file_upload' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Handle file upload
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);

            // Save data to the database
            sosialModel::create([
                'id_sosial' => $request->id_sosial,
                'nama_sosial' => $request->nama_sosial,
                'deskripsi' => $request->ket_sosial,
                'gambar' => $filename,
            ]);

            return redirect('sosialisasi')->with('success', 'Data sosial berhasil disimpan.');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah file.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $sosial = sosialModel::findOrFail($id);

            $breadcrumb = (object)[
                'title' => 'Detail Data sosial',
                'list' => ['Home', 'Data Seluruh sosial', 'Detail Data sosial']
            ];

            $page = (object)[
                'title' => 'Detail Data sosial'
            ];

            $activeMenu = 'sosial';
        } catch (\Exception $e) {
            return 'data tidak ditemukan';
        }

        return view('sosial.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'sosialisasi' => $sosial, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sosial = sosialModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Edit Data sosial',
            'list' => ['Home', 'Data sosial', 'Edit Data sosial']
        ];

        $page = (object)[
            'title' => 'Edit Data sosial'
        ];

        $activeMenu = 'sosial';

        return view('sosial.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'sosialisasi' => $sosial, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sosial = sosialModel::findOrFail($id);

        $request->validate([
            'nama_sosialisasi' => 'required|string|max:100',
            'ket_sosialisasi' => 'required|string|max:500',
            'file_upload' => 'nullable|mimes:jpg,jpeg,png|max:2048'
        ]);

        // Update fields

        $sosial->nama_sosial = $request->nama_sosialisasi;
        $sosial->deskripsi = $request->ket_sosialisasi;

        // Handle file upload if present
        if ($request->hasFile('file_upload')) {
            $file = $request->file('file_upload');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $filename);

            // Delete old file if exists
            if ($sosial->gambar && file_exists(public_path($sosial->gambar))) {
                unlink(public_path($sosial->gambar));
            }

            $sosial->gambar =  $filename;
        }

        $sosial->save();

        return redirect('/sosialisasi')->with('success', 'Data sosial berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        sosialModel::findOrFail($id)->delete();
        return redirect('/sosialisasi')->with('success', 'Data sosial berhasil dihapus');
    }
}
