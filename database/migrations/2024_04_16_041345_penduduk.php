<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->bigIncrements('id_penduduk');
            $table->bigInteger('no_kk');
            $table->string('nik_penduduk', 100);
            $table->string('nama_penduduk', 100);
            $table->string('pekerjaan_penduduk', 100);
            $table->enum('jenis_kelamin', ['laki-laki','perempuan']);
            $table->string('status_penduduk', 100);
            $table->date('tgl_lahir_penduduk');
            $table->string('no_tlp_penduduk', 50);
            $table->string('alamat', 200);
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