<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Penduduk',
            'list' => ['Home']
        ];

        $page = (object)[
            'title' => 'Dashboard'
        ];

        $activeMenu = 'dashboard';
        return view('dashboard',  ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
}
