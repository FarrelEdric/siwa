<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'id_berita' => '1',
                'nama_berita' => 'kerjaBakti',
                'waktu_pel_berita' => now(),
                'lokasi'=>'Lapangan',
                'deskripsi' => '
                Kerja bakti di RW 06 Malang merupakan wujud kolaborasi dan gotong royong yang kuat antara warga untuk memperbaiki lingkungan dan memajukan kehidupan bersama. Dalam setiap kegiatan kerja bakti, terlihat semangat kebersamaan dan rasa tanggung jawab yang tinggi dari setiap anggota masyarakat. ',
                'gambar' => '',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'id_berita' => '2',
                'nama_berita' => 'cek kesehatan',
                'waktu_pel_berita' => now(),
                'lokasi'=>'Posyandu',
                'deskripsi' => '
               Program Posyandu di RW 06 Malang adalah sebuah inisiatif pemerintah setempat untuk meningkatkan kesehatan masyarakat, khususnya ibu dan anak. Posyandu merupakan singkatan dari Pos Pelayanan Terpadu, yang bertujuan untuk memberikan pelayanan kesehatan primer secara terpadu dan terintegrasi kepada masyarakat. Di RW 06 Malang, program Posyandu dijalankan secara sistematis dan berkelanjutan dengan melibatkan partisipasi aktif dari seluruh warga.',
                'gambar' => '',
                'created_at' => now(),
                'updated_at' => now(),


            ],
            [
                'id_berita' => '3',
                'nama_berita' => 'Halal bi halal',
                'waktu_pel_berita' => now(),
                'lokasi'=>'Lapangan',
                'deskripsi' => 'Halal bi Halal adalah tradisi unik dan penting di Indonesia, yang biasanya dirayakan oleh komunitas Muslim untuk mempererat silaturahmi, memperkuat hubungan, dan mempromosikan persatuan. Kegiatan ini berlangsung setelah bulan suci Ramadan dan perayaan Idul Fitri. ',
                'gambar' => '',
                'created_at' => now(),
                'updated_at' => now(),

            ],

        ];
        DB::table('berita_models')->insert($data);
    }
}
