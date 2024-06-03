<?php

namespace App\Http\Controllers;

use App\Models\keuanganModel;
use App\Models\kk_pendudukModel;
use App\Models\pendudukModel;
use App\Models\pengeluaranModel;
use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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

        $penduduk = pendudukModel::with('kkPenduduk')->find(Auth::user()->id_penduduk);
        $keuangans = keuanganModel::selectRaw('sum(pemasukan_iuran) as total')->join('kk_penduduk', 'kk_penduduk.no_kk', 'keuangan.no_kk')
            ->where('kk_penduduk.rt', $penduduk->kkPenduduk->rt)
            ->first();



        return view('keuangan.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'total' => $keuangans]);
    }

    public function indexPenduduk()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Keuangan',
            'list' => ['Home', 'Keuangan']
        ];

        $page = (object)[
            'title' => 'Daftar Keuangan yang ada'
        ];

        $activeMenu = 'keuangan';
        $penduduk = pendudukModel::with('kkPenduduk')->find(Auth::user()->id_penduduk);
        $keuangans = keuanganModel::join('kk_penduduk', 'kk_penduduk.no_kk', 'keuangan.no_kk')
            ->where('kk_penduduk.no_kk', $penduduk->kkPenduduk->no_kk)
            ->get();
        return view('keuangan.penduduk.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'data' => $keuangans]);
    }

    public function pengeluaran()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Keuangan',
            'list' => ['Home', 'Keuangan']
        ];

        $page = (object)[
            'title' => 'Daftar Keuangan yang ada'
        ];

        $activeMenu = 'keuangan';

        $pengeluaran = pengeluaranModel::with('user')->where('user_id', Auth::user()->id_user)->get();
        $total = pengeluaranModel::selectRaw('sum(pengeluaran_iuran) as total')->where('user_id', Auth::user()->id_user)->first();


        return view('keuangan.pengeluaran', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'data' => $pengeluaran, 'total' => $total]);
    }


    public function list(Request $request)
    {
        $penduduk = pendudukModel::with('kkPenduduk')->find(Auth::user()->id_penduduk);
        $keuangans = keuanganModel::join('kk_penduduk', 'kk_penduduk.no_kk', 'keuangan.no_kk')
            ->where('kk_penduduk.rt', $penduduk->kkPenduduk->rt)
            ->get();

        // 
        return DataTables::of($keuangans)
            ->addIndexColumn() // Menambahkan kolom index / no urut (default nmaa kolom: DT_RowINdex)
            ->addColumn('aksi', function ($keuangan) {
                $btn = '<a   href="' . url('/keuangan/' . $keuangan->id_keuangan) . '" class="btn btn-primary" >Detail</a> ';
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
        $validate = Validator::make($request->all(), [
            'nkk' => 'required'
        ]);

        try {
            $kartu_keluarga = kk_pendudukModel::where('nkk', $request->nkk)->firstOrFail();
            keuanganModel::create([
                'no_kk' => $kartu_keluarga->no_kk,
                'date' => now(),
            ]);
        } catch (\Exception $e) {
            return redirect('keuangan')->with('error', 'Data gagal ditambah');
        }

        return redirect('keuangan')->with('success', 'Keuangan berhasil ditambah');
    }


    public function storePengeluaran(Request $request)
    {
        //
        $validate = Validator::make($request->all(), [

            'keterangan_pengeluaran' => 'required',
            'pengeluaran_iuran' => 'required',
        ]);

        try {

            pengeluaranModel::create([
                'user_id' => Auth::user()->id_user,
                'date' => now(),
                'keterangan_pengeluaran' => $request->keterangan_pengeluaran,
                'pengeluaran_iuran' => $request->pengeluaran_iuran
            ]);
        } catch (\Exception $e) {
            return redirect('pengeluaran')->with('error', 'Data gagal ditambah');
        }

        return redirect('pengeluaran')->with('success', 'Keuangan berhasil ditambah');
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
