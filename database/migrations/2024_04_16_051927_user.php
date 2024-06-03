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
            $table->unsignedBigInteger('level_id')->index()->default('2');
            $table->foreign('level_id')->references('level_id')->on('level');
            $table->boolean('status_aktif')->default(1);
            $table->string('username', 100);
            $table->string('password', 100);
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
