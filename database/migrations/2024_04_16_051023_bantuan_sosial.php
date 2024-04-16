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
        Schema::create('bantuan_sosial', function (Blueprint $table) {
            $table->id('id_bantuan');
            $table->unsignedBigInteger('no_kk')->index();
            $table->foreign('no_kk')->references('no_kk')->on('kk_penduduk');
            $table->string('jenis_bantuan',100);
            $table->date('tgl_bantuan');
            

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
