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
        Schema::create('transkrip', function (Blueprint $table) {
            $table->id('id_transkrip');
            $table->string('nama_mahasiswa',45)->required();
            $table->string('nama_matakuliah',50)->required();
            $table->integer('nilai')->required();
            $table->integer('sks')->required();
            $table->string('index',2)->required();
            $table->integer('bobot')->required();
            // nim(done)
            // id_nilai(done)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transkrip');
    }
};
