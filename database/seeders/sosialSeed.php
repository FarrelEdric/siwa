<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sosialSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'id_sosial' => '1',
                'nama_sosial' => 'cara mengurus KARTU KELUARGA hilang',
                'deskripsi' => 'Langkah-langkah mengurus KK yang hilang atau rusak adalah sebagai berikut:
Kunjungi Kantor Dukcapil sesuai domisili pada hari dan jam kerja.
Isi formulir pendaftaran peristiwa kependudukan.
Serahkan dokumen KK yang rusak atau surat keterangan hilang dari kepolisian.
Tunggu hingga petugas menerbitkan KK yang baru.',
                'gambar' => '',
                'created_at'=>now(),
                'updated_at'=>now(),

            ],

            [
                'id_sosial' => '2',
                'nama_sosial' => 'Cara mengurus Kartu Tanda Penduduk',
                'deskripsi' => 'Tata Cara Membuat e-KTP 2023 
                Siapkan dokumen sesuai ketentuan 
                Datang ke kantor kelurahan atau kantor Direktorat Jenderal Kependudukan dan Pencatatan Sipil 
                Serahkan dokumen kepada petugas 
                Lakukan proses pengambilan foto dan rekam sidik jari 
                Ambil KTP dalam waktu secepat-cepatnya 14 hari setelah pendaftaran.',
                'gambar' => '',
                'created_at'=>now(),
                'updated_at'=>now(),

            ],
        ];
        DB::table('sosial')->insert($data);
    }
}
