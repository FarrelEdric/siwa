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
            $table->unsignedBigInteger('id_keuangan')->index();
            $table->foreign('id_keuangan')->references('id_keuangan')->on('keuangan');
            $table->string('kepala_keluarga', 100);
            $table->string('alamat', 100);
            $table->string('rt', 100);
            $table->string('rw', 100);
            $table->string('kode_pos', 100);
            $table->string('kelurahan', 100);
            $table->string('kecamatan', 100);
            $table->string('kota', 100);
            $table->string('provinsi', 100);
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
