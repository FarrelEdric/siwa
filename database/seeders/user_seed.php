<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_user'=>'1',
                'id_penduduk' => '1',
                'level_id' => '1',
                'nama_user'=>'irwan',
                'username'=>'irwan',
                'password'=> Hash::make('password')
            ],
            
            [
                'id_user'=>'2',
                'id_penduduk' => '2',
                'level_id' => '2',
                'nama_user'=>'asep',
                'username'=>'asep',
                'password'=> Hash::make('password')
            ],
            [
                'id_user'=>'3',
                'id_penduduk' => '3',
                'level_id' => '2',
                'nama_user'=>'tenza',
                'username'=>'tenza',
                'password'=> Hash::make('password')
            ],
    
            ];
            DB::table('user')->insert($data);
    }
}
