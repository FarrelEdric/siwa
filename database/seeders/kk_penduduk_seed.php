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
        $data=[
         [
            'no_kk'=>'1',
            'id_keuangan' =>'1',
            'kepala_keluarga'=>'irwan',
            'alamat'=>'jalan golden',
            'rt'=>'01',
            'rw'=>'02',
            'kode_pos'=>'43567',
            'kelurahan'=>'Tegalsari',
            'kecamatan'=>'Blimbing',
            'kota' =>'Malang',
            'provinsi'=>'jawa Timur'

         
         ],
         [
            'no_kk'=>'2',
            'id_keuangan' =>'2',
            'kepala_keluarga'=>'asep',
            'alamat'=>'jalan golden',
            'rt'=>'01',
            'rw'=>'02',
            'kode_pos'=>'43567',
            'kelurahan'=>'Tegalsari',
            'kecamatan'=>'Blimbing',
            'kota' =>'Malang',
            'provinsi'=>'jawa Timur'
            
         
         ],
         [
            'no_kk'=>'3',
            'id_keuangan'=>'2',
            'kepala_keluarga'=>'tenza',
            'alamat'=>'jalan golden',
            'rt'=>'01',
            'rw'=>'02',
            'kode_pos'=>'43567',
            'kelurahan'=>'Tegalsari',
            'kecamatan'=>'Blimbing',
            'kota' =>'Malang',
            'provinsi'=>'jawa Timur'
         ]
    
         ];
         DB::table('kk_penduduk')->insert($data);
    }
}
