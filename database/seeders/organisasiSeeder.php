<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class organisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Satria Abrar',
                'jabatan' => 'Ketua RW',
                'masajabatan' => '2020-2025',
                'no_tlp' => '08213234555876',
                'alamat' => 'jl Sriwangi no 8 RT 01 RW 06 Jatiguwi',
                'email' => 'satria01@gmail.com'

            ],
            [
                'nama' => 'Muhammad Irsyad Dany',
                'jabatan' => 'Ketua RT',
                'masajabatan' => '2020-2025',
                'no_tlp' => '08213234522876',
                'alamat' => 'jl Sriwangi no 9 RT 01 RW 06 Jatiguwi',
                'email' => 'irsad02@gmail.com'
            ],
            [
                'nama' => 'Fransiscus Farrel',
                'jabatan' => 'Bendahara RT 01',
                'masajabatan' => '2020-2025',
                'no_tlp' => '08213234333872',
                'alamat' => 'jl Sriwangi no 10 RT 01 RW 06 Jatiguwi',
                'email' => 'farrel03@gmail.com'
            ]

        ];
        DB::table('organisasi')->insert($data);
    }
}
