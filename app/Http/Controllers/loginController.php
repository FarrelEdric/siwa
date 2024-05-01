<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        return  view('login');
    }
    public function proses_login(Request $request)
    {
        // set validasi



        // dapatkan kredensial dari permintaan
        if (Auth::attempt($request->validate([
            'username' => 'required',
            'password' => 'required'
        ]))) {
            return redirect(url('surat'));
        }


        // jika autentikasi gagal


        // jika autentikasi berhasil
        return url('/login');
    }
}
