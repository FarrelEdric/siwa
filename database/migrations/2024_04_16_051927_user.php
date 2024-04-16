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
        Schema::create('user', function (Blueprint $table) {
            $table->id('id_user');
            $table->unsignedBigInteger('id_penduduk')->index();
            $table->foreign('id_penduduk')->references('id_penduduk')->on('penduduk');
            $table->unsignedBigInteger('level_id')->index();
            $table->foreign('level_id')->references('level_id')->on('level');
            $table->string('nama_user', 100);
            $table->string('username', 100);
            $table->string('password', 100);
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
