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
        Schema::create('penduduk_masuk', function (Blueprint $table) {
            $table->id('id_penduduk_masuk');
            $table->unsignedBigInteger('id_penduduk')->index();
            $table->foreign('id_penduduk')->references('id_penduduk')->on('penduduk');
            $table->string('nama_penduduk_masuk',100);
            $table->string('alamat_penduduk_masuk',100);

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
