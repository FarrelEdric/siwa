<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class keuangan_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id_keuangan'=>'1',
            'jenis_iuran' => 'A',
            'jumlah_iuran' => '15000'
        ],
        
            ['id_keuangan'=>'2',
            'jenis_iuran' => 'B',
            'jumlah_iuran' => '25000'
        ],
            [
            'id_keuangan'=>'3',
            'jenis_iuran' => 'B',
            'jumlah_iuran' => '35000'
            ]

        ];
        DB::table('keuangan')->insert($data);
    }
}
