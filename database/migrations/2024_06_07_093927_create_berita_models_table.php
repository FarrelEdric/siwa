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
        Schema::create('berita_models', function (Blueprint $table) {
            $table->id('id_berita');
            $table->string('nama_berita', 100);
            $table->date('waktu_pel_berita');
            $table->string('lokasi',100);
            $table->text('deskripsi');
            $table->string('gambar', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_models');
    }
};
