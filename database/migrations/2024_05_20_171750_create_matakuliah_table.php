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
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->integer('id_matakuliah')->primary();
            $table->string('nama_matakuliah', 50);
            $table->integer('sks');
            $table->string('semester', 20);
            $table->string('perkuliahan', 20);
            $table->timestamps();
            // nip(done)
            // id_jurusan(done)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
    }
};
