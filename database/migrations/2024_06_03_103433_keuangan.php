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
        Schema::create('keuangan', function (Blueprint $table) {
            $table->id('id_keuangan');
            $table->unsignedBigInteger('no_kk')->index();
            $table->foreign('no_kk')->references('no_kk')->on('kk_penduduk');
            $table->date('date');
            $table->integer('pemasukan_iuran')->default(50000);
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
