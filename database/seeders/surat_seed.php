<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class surat_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'id_surat'=>'1',
                'id_penduduk'=>'1',
                'tgl_surat'=>now(),
                'tujuan'=>'untuk kip kuliah'
               
            ],
    
             [
                'id_surat'=>'2',
                'id_penduduk'=>'2',
                'tgl_surat'=>now(),
                'tujuan'=>'untuk meminta bansos'
               
             ],
             [
                'id_surat'=>'3',
                'id_penduduk'=>'3',
                'tgl_surat'=>now(),
                'tujuan'=>'untuk kip kuliah'
               
             ]
            ];
            DB::table('surat')->insert($data);
    }
}
