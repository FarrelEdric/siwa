<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kk_penduduk_seed extends Seeder
{
   /**
    * Run the database seeds.
    */
   public function run(): void
   {
      $data = [
         [
            'no_kk' => '1',

            'kepala_keluarga' => 'irwan',
            'alamat' => 'jalan golden',
            'nkk' => '12345',
            'rt' => '01',
            'rw' => '02',



         ],
         [
            'no_kk' => '2',
            'nkk' => '1234567',

            'kepala_keluarga' => 'asep',
            'alamat' => 'jalan golden',
            'rt' => '01',
            'rw' => '02',



         ],
         [
            'no_kk' => '3',
            'nkk' => '1234545',

            'kepala_keluarga' => 'tenza',
            'alamat' => 'jalan golden',
            'rt' => '01',
            'rw' => '02',

         ]

      ];
      DB::table('kk_penduduk')->insert($data);
   }
}
