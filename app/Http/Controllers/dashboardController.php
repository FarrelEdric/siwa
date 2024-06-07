<?php

namespace App\Http\Controllers;

use App\Models\kegiatanModel;
use App\Models\keuanganModel;
use App\Models\pendudukModel;
use App\Models\suratModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Dashboard',
            'list' => ['Home']
        ];

        $page = (object) [
            'title' => 'Dashboard'
        ];
        $berita = kegiatanModel::paginate(2);
        $surat = suratModel::where('id_penduduk', '=', Auth::user()->id_penduduk)->get();
        $penduduk = pendudukModel::selectRaw('count(id_penduduk)')->groupBy('jenis_kelamin')->pluck('count(id_penduduk)')->toArray();
        $keuangan =  keuanganModel::selectRaw('sum(pemasukan_iuran)')->groupByRaw('MONTH(date)')->pluck('sum(pemasukan_iuran)')->toArray();
        $pengeluaran =  keuanganModel::selectRaw('sum(pengeluaran_iuran)')->groupByRaw('MONTH(date)')->pluck('sum(pengeluaran_iuran)')->toArray();
        $tgl =  keuanganModel::selectRaw('MONTHNAME(date) as date1')->groupBy('date1')->pluck('date1')->toArray();
        // dd($keuangan);
        $penduduk = array_map('intval', $penduduk);
        $keuangan = array_map('intval', $keuangan);
        $pengeluaran = array_map('intval', $pengeluaran);
        $activeMenu = 'dashboard';

        return view('dashboard', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'berita' => $berita, 'surat' => $surat, 'penduduk' => $penduduk, 'keuangan' => $keuangan, 'tanggal' => $tgl, 'pengeluaran' => $pengeluaran]);
    }
}
