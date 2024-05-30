<?php

namespace App\Http\Controllers;

use App\Models\kegiatanModel;
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
        $activeMenu = 'dashboard';

        return view('dashboard', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu, 'berita' => $berita, 'surat' => $surat]);
    }
}