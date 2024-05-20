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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id('id_penduduk');
            $table->unsignedBigInteger('no_kk')->index();
            $table->foreign('no_kk')->references('no_kk')->on('kk_penduduk');
            $table->string('nik_penduduk',100);
            $table->string('nama_penduduk',100);
            $table->integer('kk_penduduk');
            $table->string('pekerjaan_penduduk',100);
            $table->string('status_penduduk',100);
            $table->date('tgl_lahir_penduduk');
            $table->string('no_tlp_penduduk',50);

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
