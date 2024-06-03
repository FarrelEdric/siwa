<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            level_seed::class,

            kk_penduduk_seed::class,
            penduduk_seed::class,
            user_seed::class,
            keuangan_seed::class,
            pengeluaran::class,
            penduduk_masuk_seed::class,
            penduduk_keluar_seed::class,
            surat_seed::class,
            bantuan_sosial_seed::class,
            kegiatan_seed::class,
            organisasiSeeder::class,

        ]);
    }
}
