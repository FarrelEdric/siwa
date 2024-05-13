<?php

namespace App\Http\Controllers;

use App\Models\suratModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class surat extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Surat',
            'list' => ['Home', 'surat']
        ];

        $page = (object)[
            'title' => 'Daftar surat yang ada'
        ];

        $activeMenu = 'surat';
        return view('surat.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }


    public function list(Request $request)
    {
        $levels = suratModel::all();

        // 




        return DataTables::of($levels)
            ->addIndexColumn() // Menambahkan kolom index / no urut (default nmaa kolom: DT_RowINdex)
            ->addColumn('aksi', function ($level) {

                $btn = '<a href="' . url('/surat/' . $level->id_surat . '/edit') . '" class="btn btn-warning" style=" height: 40px; margin-right: 5px;">Cetak</a> ';

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
            'title' => 'Tambah Surat',
            'list' => ['Home', 'Surat', 'Tambah']
        ];

        $page = (object)[
            'title' => 'Tambah surat baru'
        ];

        $activeMenu = 'surat';

        // Jika diperlukan, Anda dapat menambahkan logika tambahan di sini, seperti memuat data yang diperlukan dari model lain.

        return view('surat.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input yang diterima dari formulir
        $request->validate([
            'id_penduduk' => 'required|string', // Sesuaikan dengan aturan validasi yang sesuai dengan model
            'tgl_surat' => 'required|date',
            'tujuan' => 'required|string',
            // Tambahkan aturan validasi lain sesuai kebutuhan
        ]);

        // Buat surat baru berdasarkan data yang diterima dari formulir
        $surat = new suratModel();
        $surat->id_penduduk = $request->id_penduduk;
        $surat->tgl_surat = $request->tgl_surat;
        $surat->tujuan = $request->tujuan;
        // Atur atribut lainnya sesuai kebutuhan

        // Simpan surat baru ke dalam database
        $surat->save();

        // Redirect pengguna ke halaman yang sesuai dengan pesan sukses
        return redirect('/surat')->with('success', 'Surat berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penduduk = suratModel::with(['penduduk'])->find($id);

        $breadcrumb = (object)[
            'title' => 'Detail Penduduk',
            'list' => ['Home', 'Penduduk', 'Detail']
        ];

        $page = (object)[
            'title' => 'Detail Penduduk'
        ];

        $activeMenu = 'penduduk';
        return view('surat.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'surat' => $penduduk, 'activeMenu' => $activeMenu]);
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
        $surat = suratModel::findOrFail($id)->delete();
        return redirect('/surat');
    }
}
