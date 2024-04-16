<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class penduduk_masuk_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
        [
            'id_penduduk_masuk'=>'1',
            'id_penduduk'=>'1',
            'nama_penduduk_masuk'=>'boni',
            'alamat_penduduk_masuk'=>'jakarta'
           
        ],

         [
            'id_penduduk_masuk'=>'2',
            'id_penduduk'=>'2',
            'nama_penduduk_masuk'=>'men',
            'alamat_penduduk_masuk'=>'surabaya'
           
         ]
        ];
        DB::table('penduduk_masuk')->insert($data);
}
}
