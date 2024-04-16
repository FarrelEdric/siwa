<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penduduk_keluar_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_penduduk_keluar' => '1',
                'id_penduduk' => '1',
                'nama_penduduk_keluar' => 'boni',
                'alamat_penduduk_keluar' => 'jakarta'

            ],

            [
                'id_penduduk_keluar' => '2',
                'id_penduduk' => '2',
                'nama_penduduk_keluar' => 'men',
                'alamat_penduduk_keluar' => 'surabaya'

            ]
        ];
        DB::table('penduduk_keluar')->insert($data);
    }
}
