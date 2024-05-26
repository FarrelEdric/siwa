<?php

namespace App\Http\Controllers;

use App\Models\suratModel;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class surat extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Surat',
            'list' => ['Home', 'surat']
        ];

        $page = (object) [
            'title' => 'Daftar surat yang ada'
        ];

        $activeMenu = 'surat';
        return view('surat.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }




    public function list(Request $request)
    {
        $levels = suratModel::with('penduduk')->get();

        // 




        return DataTables::of($levels)
            ->addIndexColumn() // Menambahkan kolom index / no urut (default nmaa kolom: DT_RowINdex)
            ->addColumn('aksi', function ($level) {
                $btn = '';
                if (Auth::user()->level_id == 1) {
                    $btn = '<a class="btn btn-success" href="#"> Konfirmasi </a>';
                    return $btn;
                } else {
                    if ($level->status == 'Menunggu' || $level->status == 'Ditolak') {
                        $btn = '<a  style="cursor:not-allowed" class="btn btn-secondary" >Cetak</a> ';
                    } else {
                        $btn = '<a href="' . url('/surat/download/' . $level->id_surat) . '" class="btn btn-danger" >Cetak</a> ';
                    }
                }
                return $btn;
            })

            ->addColumn('status_pengajuan', function ($level) {
                $status = '';
                switch ($level->status) {
                    case 'Menunggu':
                        $status = ' <p style="color:white!important;width:150px;" class="bg-warning text-center  m-auto  p-2 rounded-3">Menunggu </p>';
                        break;
                    case 'Diterima':
                        $status = '<p style="color:white!important;width:150px;" class="bg-success text-center  m-auto   p-2 rounded-3">Diterima </p>';
                        break;
                    case 'Ditolak':
                        $status = '<p style="color:white!important;width:150px;" class="bg-danger text-center  m-auto  p-2 rounded-3">Ditolak </p>';
                        break;
                }

                return $status;
            })

            ->rawColumns(['aksi', 'status_pengajuan'])
            ->make(true);
    }

    public function printPDF($id)
    {
        $surat = suratModel::findOrFail($id);
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('components.surat', ['surat' => $surat]);
        return $pdf->download();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $breadcrumb = (object) [
            'title' => 'Tambah Surat',
            'list' => ['Home', 'Surat', 'Tambah']
        ];

        $page = (object) [
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
            'tujuan' => 'required|string',
            // Tambahkan aturan validasi lain sesuai kebutuhan
        ]);


        // cek nik


        suratModel::create($request->all());


        // Redirect pengguna ke halaman yang sesuai dengan pesan sukses
        return redirect('/surat')->with('success', 'Surat berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penduduk = suratModel::with(['penduduk'])->find($id);

        $breadcrumb = (object) [
            'title' => 'Detail Penduduk',
            'list' => ['Home', 'Penduduk', 'Detail']
        ];

        $page = (object) [
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
