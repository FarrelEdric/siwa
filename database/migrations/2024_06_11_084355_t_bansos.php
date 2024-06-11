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
        Schema::create('t_bansos', function (Blueprint $table) {
            $table->id('id_bansos');
            $table->string('nama_penerima', 200);
            $table->enum('c1', ['4', '2']);
            $table->enum('c2', ['4', '2']);
            $table->enum('c3', ['5', '4', '3']);
            $table->enum('c4', ['5', '3', '1']);
            $table->enum('c5', ['4', '3', '2', '1']);
            $table->enum('c6', ['4', '2']);
            $table->enum('c7', ['3', '2', '1']);
            $table->enum('c8', ['4', '2']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bansos');
    }
};
