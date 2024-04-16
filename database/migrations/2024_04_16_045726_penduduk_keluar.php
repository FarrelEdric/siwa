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
        Schema::create('penduduk_keluar', function (Blueprint $table) {
            $table->id('id_penduduk_keluar');
            $table->unsignedBigInteger('id_penduduk')->index();
            $table->foreign('id_penduduk')->references('id_penduduk')->on('penduduk');
            $table->string('nama_penduduk_keluar',100);
            $table->string('alamat_penduduk_keluar',100);

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
