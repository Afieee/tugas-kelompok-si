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
        Schema::create('nilai', function (Blueprint $table) {
            $table->string('id_nilai',300)->primary();
            $table->string('nama_matakuliah',50)->required();
            $table->string('nama_mahasiswa',45)->required();
            $table->string('nama_dosen',45)->required();
            $table->integer('sks')->required();
            $table->string('semester',20)->required();
            // nim(done)
            // nip(done)
            // id_matakuliah
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
