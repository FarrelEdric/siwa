<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class t_bansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data dummy untuk tabel t_bansos
        $data = [
            [
                'id_bansos' => '1',
                'nama_penerima' => 'Angga Candra',
                'c1' => '4',
                'c2' => '2',
                'c3' => '4',
                'c4' => '5',
                'c5' => '1',
                'c6' => '4',
                'c7' => '2',
                'c8' => '2'
            ],
            [
                'id_bansos' => '2',
                'nama_penerima' => 'Della Deviana',
                'c1' => '2',
                'c2' => '4',
                'c3' => '3',
                'c4' => '5',
                'c5' => '3',
                'c6' => '4',
                'c7' => '1',
                'c8' => '2'
            ],
            [
                'id_bansos' => '4',
                'nama_penerima' => 'Lyodra',
                'c1' => '4',
                'c2' => '2',
                'c3' => '5',
                'c4' => '1',
                'c5' => '1',
                'c6' => '2',
                'c7' => '1',
                'c8' => '4'
            ],
            [
                'id_bansos' => '5',
                'nama_penerima' => 'Mawar Eva',
                'c1' => '4',
                'c2' => '4',
                'c3' => '4',
                'c4' => '3',
                'c5' => '1',
                'c6' => '2',
                'c7' => '2',
                'c8' => '2'
            ],
            [
                'id_bansos' => '6',
                'nama_penerima' => 'Mahen',
                'c1' => '2',
                'c2' => '2',
                'c3' => '3',
                'c4' => '1',
                'c5' => '2',
                'c6' => '4',
                'c7' => '1',
                'c8' => '2'
            ]
        ];
        DB::table('t_bansos')->insert($data);
    }
}
