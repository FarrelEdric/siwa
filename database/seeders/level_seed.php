<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class level_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'level_id' => '1',
                'level_nama' => 'admin RW'
            ],
            [
                'level_id' => '2',
                'level_nama' => 'user'
            ], [
                'level_id' => '3',
                'level_nama' => 'admin RT'
            ]

        ];
        DB::table('level')->insert($data);
    }
}
