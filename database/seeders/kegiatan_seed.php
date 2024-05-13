<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kegiatan_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_kegiatan' => '1',
                'id_user' => '1',
                'jenis_kegiatan' => 'kerjaBakti',
                'tgl_kegiatan' => now(),
                'lokasi' => 'malang',
                'deskripsi'=> '
                Kerja bakti di RW 06 Malang merupakan wujud kolaborasi dan gotong royong yang kuat antara warga untuk memperbaiki lingkungan dan memajukan kehidupan bersama. Dalam setiap kegiatan kerja bakti, terlihat semangat kebersamaan dan rasa tanggung jawab yang tinggi dari setiap anggota masyarakat. '
            ],
            [
                'id_kegiatan' => '2',
                'id_user' => '2',
                'jenis_kegiatan' => 'Cek kesehatan',
                'tgl_kegiatan' => now(),
                'lokasi' => 'malang',   
                'deskripsi'=>'Program Posyandu di RW 06 Malang adalah sebuah inisiatif pemerintah setempat untuk meningkatkan kesehatan masyarakat, khususnya ibu dan anak. Posyandu merupakan singkatan dari Pos Pelayanan Terpadu, yang bertujuan untuk memberikan pelayanan kesehatan primer secara terpadu dan terintegrasi kepada masyarakat. Di RW 06 Malang, program Posyandu dijalankan secara sistematis dan berkelanjutan dengan melibatkan partisipasi aktif dari seluruh warga.'
            ]

        ];
        DB::table('kegiatan')->insert($data);
    }
}
