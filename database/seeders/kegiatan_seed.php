<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kegiatan_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_kegiatan' => '1',
                'id_user' => '1',
                'jenis_kegiatan' => 'kerjaBakti',
                'tgl_kegiatan' => now(),
                'lokasi' => 'malang'
            ],
            [
                'id_kegiatan' => '2',
                'id_user' => '2',
                'jenis_kegiatan' => 'Cek kesehatan',
                'tgl_kegiatan' => now(),
                'lokasi' => 'malang'
            ]

        ];
        DB::table('kegiatan')->insert($data);
    }
}
