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
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $credential = $request->only('username', 'password');
        if(Auth::attempt($credential)) {
            // $user = Auth::user();

            // if() {

            // }
            return redirect()->intended('/penduduk');
        }

        // jika autentikasi berhasil
        return redirect('/');
    }

    public function logout(Request $request) 
    {
        $request->session()->flush();

        Auth::logout();
        return redirect('/');
    }
}
