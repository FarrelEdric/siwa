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
            [
                'id_keuangan' => '1',
                'no_kk' => 1,
                'date' => date('Y-m-d', strtotime(' 2024-01-01')),


            ],

            [
                'id_keuangan' => '2',
                'no_kk' => 2,
                'date' => date('Y-m-d', strtotime('2024-02-01')),

            ],
            [
                'id_keuangan' => '3',
                'no_kk' => 3,
                'date' => date('Y-m-d', strtotime('2024-03-01')),

            ],
        ];
        DB::table('keuangan')->insert($data);
    }
}
