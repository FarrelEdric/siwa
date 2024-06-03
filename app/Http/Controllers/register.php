<?php

namespace App\Http\Controllers;

use App\Models\userModel;
use App\Http\Controllers\Controller;
use App\Models\pendudukModel;
use Exception;
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
        try {

            $penduduk = pendudukModel::where('nik_penduduk', $request->nik)->firstOrFail();

            $user = userModel::create(
                [
                    'id_penduduk' => $penduduk->id_penduduk,
                    'level_id' => $request->level_id,
                    'nama_user' => $request->nama_user,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),

                ]
            );
        } catch (Exception $e) {
        }

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
