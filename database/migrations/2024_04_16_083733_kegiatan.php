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
        //
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->id('id_kegiatan');
            $table->unsignedBigInteger('id_user')->index();
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->string('jenis_kegiatan', 100);
            $table->date('tgl_kegiatan');
            $table->string('lokasi', 100);
            $table->text('deskripsi')->nullable();
            $table->string('image', 100)->nullable();
            $table->enum('jenis_berita', ['sosialisasi', 'berita'])->default('berita');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
