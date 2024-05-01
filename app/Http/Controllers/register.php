<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class register extends Controller
{

    public function register()
    {
        return view('register');
    }
    public function proses_register(Request $request)
    {
        // Set validasi
        // $validator = Validator::make($request->all(), [
        //     'username' => 'required',
        //     'nama' => 'required',
        //     'password' => 'required|min:8|confirmed',
        //     'level_id' => 'required'
        // ]);

        // Jika validasi gagal
        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 422);
        // }

        // Buat pengguna
        $user = userModel::create(
            [
                'id_penduduk' => $request->id_penduduk,
                'level_id' => $request->level_id,
                'nama_user' => $request->nama_user,
                'username' => $request->username,
                'password' => Hash::make($request->password),

            ]
        );

        // // Kembalikan respons JSON pengguna berhasil dibuat
        // if ($user) {
        //     return response()->json([
        //         'success' => true,
        //         'user' => $user,
        //     ], 201);
        // }

        // Kembalikan respons JSON proses penyisipan gagal
        return redirect(url('/'));
    }
}
