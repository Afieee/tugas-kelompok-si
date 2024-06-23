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
        Schema::create('perwalian', function (Blueprint $table) {
            $table->string('id_perwalian',40)->primary();
            $table->string('nama_mahasiswa',40)->required();
            $table->string('nama_matakuliah',50)->required();
            $table->integer('sks')->required();
            $table->string('semester',20)->required();
            $table->string('perkuliahan',20)->required();
            $table->string('nama_dosen',45)->required();
            // nim(done)
            // id_matakuliah(done)
            // nip(done)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perwalian');
    }
};
