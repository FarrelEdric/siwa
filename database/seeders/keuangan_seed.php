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
                'date' => date('Y-m-d', strtotime(' 2024-01-01')),
                'pemasukan_iuran' => '3600000',
                'pengeluaran_iuran' => '1500000',
                'total' => '2180000'
            ],

            [
                'id_keuangan' => '2',
                'date' => date('Y-m-d', strtotime('2024-01-01')),
                'pemasukan_iuran' => '3600000',
                'pengeluaran_iuran' => '880000',
                'total' => '2800000'
            ],
            [
                'id_keuangan' => '3',
                'date' => date('Y-m-d', strtotime('2024-01-01')),
                'pemasukan_iuran' => '3680000',
                'pengeluaran_iuran' => '880000',
                'total' => '2180000'
            ],
        ];
        DB::table('keuangan')->insert($data);
    }
}
