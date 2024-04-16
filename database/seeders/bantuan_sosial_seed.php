<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class bantuan_sosial_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'id_bantuan'=>'1',
            'no_kk' => '1',
            'jenis_bantuan' => 'keuangan',
            'tgl_bantuan'=>now()
        ],
        
        [
            'id_bantuan'=>'2',
            'no_kk' => '2',
            'jenis_bantuan' => 'sembako',
            'tgl_bantuan'=>now()
        ],
        [
            'id_bantuan'=>'3',
            'no_kk' => '3',
            'jenis_bantuan' => 'sembako',
            'tgl_bantuan'=>now()
        ],

        ];
        DB::table('bantuan_sosial')->insert($data);
    }
    }

