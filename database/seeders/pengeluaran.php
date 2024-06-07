<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pengeluaran extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengeluaran')->insert([

            'user_id' => 1,
            'date' => date('Y-m-d', strtotime(' 2024-01-01')),
            'pengeluaran_iuran' => '100000',
            'keterangan_pengeluaran' => 'sewa kursi',

        ]);
    }
}
