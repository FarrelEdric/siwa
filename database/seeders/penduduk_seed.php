<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penduduk_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_penduduk' => '1',
                'no_kk' => '1',
                'nik_penduduk' => '313131',
                'nama_penduduk' => 'irwan',
                'kk_penduduk' => '1',
                'pekerjaan_penduduk' => 'pegawai negri',
                'status_penduduk' => 'aktif',
                'tgl_lahir_penduduk' => '1984-10-1',
                'no_tlp_penduduk' => '081232522123'

            ],

            [
                'id_penduduk' => '2',
                'no_kk' => '2',
                'nik_penduduk' => '323232',
                'nama_penduduk' => 'asep',
                'kk_penduduk' => '2',
                'pekerjaan_penduduk' => 'pegawai negri',
                'status_penduduk' => 'aktif',
                'tgl_lahir_penduduk' => '1985-09-2',
                'no_tlp_penduduk' => '081232522124'

            ],
            [
                'id_penduduk' => '3',
                'no_kk' => '3',
                'nik_penduduk' => '333333',
                'nama_penduduk' => 'tenza',
                'kk_penduduk' => '3',
                'pekerjaan_penduduk' => 'pegawai negri',
                'status_penduduk' => 'aktif',
                'tgl_lahir_penduduk' => '1986-11-14',
                'no_tlp_penduduk' => '081232522125'

            ]
        ];
        DB::table('penduduk')->insert($data);
    }
}
