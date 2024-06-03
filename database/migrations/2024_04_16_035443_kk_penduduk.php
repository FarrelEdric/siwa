<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kk_penduduk', function (Blueprint $table) {
            $table->id('no_kk');
            $table->string('nkk', 100);
            $table->string('kepala_keluarga', 100);
            $table->string('alamat', 100);
            $table->string('rt', 100);
            $table->string('rw', 100)->default('11');
            $table->string('kode_pos', 100)->default('43567');
            $table->string('kelurahan', 100)->default('Tanjungrejo');
            $table->string('kecamatan', 100)->default('Sukun');
            $table->string('kota', 100)->default('Malang');
            $table->string('provinsi', 100)->default('Jawa Timur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
