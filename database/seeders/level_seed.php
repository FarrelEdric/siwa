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
                'level_nama' => 'admin'
            ],
            [
                'level_id' => '2',
                'level_nama' => 'user'
            ]

        ];
        DB::table('level')->insert($data);
    }
}
