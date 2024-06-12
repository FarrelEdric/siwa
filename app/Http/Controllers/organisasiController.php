<?php

namespace App\Http\Controllers;

use App\Models\organisasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class organisasiController extends Controller
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
            'title' => 'Daftar organisasi yang ada'
        ];

        $activeMenu = 'organisasi';

        $model  = organisasiModel::all();
        return view('organisasi.organisasi', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'data' => $model]);
    }


    public function list(Request $request)
    {
        $organisasi = organisasiModel::all();

        return DataTables::of($organisasi)
            ->addIndexColumn()
            ->addColumn('aksi', function ($organisasi) {
                if (Auth::user()->level_id == 1) {
                    $btn = '<a   href="' . url('/organisasi/' . $organisasi->id_organisasi) . '" class="btn btn-sm mb-1" style="margin-right: 5px; width: 80px; background-color: #1D3752; color: white;"><i class="fas fa-eye"></i> Detail</a>';
                    $btn .= '<a   href="' . url('/organisasi/edit/' . $organisasi->id_organisasi) . '" class="btn btn-warning btn-sm mb-1" style="margin-right: 5px; width: 80px;"><i class="fas fa-edit"></i> Edit</a>';
                } else {
                    $btn = '<a   href="' . url('/organisasi/' . $organisasi->id_organisasi) . '" class="btn btn-primary" >Detail</a> ';
                }
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
            'title' => 'Tambah organisasi',
            'list' => ['Home', 'organisasi', 'Tambah']
        ];

        $page = (object)[
            'title' => 'Tambah organisasi baru'
        ];

        $activeMenu = 'organisasi';

        return view('organisasi.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|unique:user,id_user',
            'jenis_organisasi' => 'required|string|max:100',
            'tgl_organisasi' => 'required|date',
            'lokasi' => 'required|string|max:100',
        ]);

        organisasiModel::create([
            'id_user' => $request->id_user,
            'jenis_organisasi' => $request->jenis_organisasi,
            'tgl_organisasi' => $request->tgl_organisasi,
            'lokasi' => $request->lokasi
        ]);

        return redirect('/organisasi')->with('success', 'organisasi berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $organisasi = organisasiModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Detail organisasi',
            'list' => ['Home', 'organisasi', 'Detail']
        ];

        $page = (object)[
            'title' => 'Detail organisasi'
        ];

        $activeMenu = 'organisasi';
        return view('organisasi.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'organisasi' => $organisasi, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $organisasi = organisasiModel::findOrFail($id);

        $breadcrumb = (object)[
            'title' => 'Edit organisasi',
            'list' => ['Home', 'organisasi', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit organisasi'
        ];

        $activeMenu = 'organisasi';

        return view('organisasi.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'organisasi' => $organisasi, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'id_user' => 'required|exists:users,id_user',
            'nama' => 'required|string|max:100',
            'jabatan' => 'required|string|max:100',
            'masaJabatan' => 'required|string|max:100',
            'no_tlp' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'email' => 'required|string|max:100',
        ]);

        $organisasi = organisasiModel::findOrFail($id);
        $organisasi->update($request->all());

        return redirect('/organisasi')->with('success', 'organisasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        organisasiModel::findOrFail($id)->delete();
        return redirect('/organisasi')->with('success', 'organisasi berhasil dihapus');
    }
}
