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
            Schema::create('organisasi', function (Blueprint $table) {
                $table->id('id_organisasi');
                $table->string('nama',100);
                $table->string('jabatan',100);
                $table->string('masaJabatan',100);
                $table->string('no_tlp',100);
                $table->string('alamat',100);
                $table->string('email',100);
    
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
