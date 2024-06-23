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
        Schema::table('transkrip', function (Blueprint $table) {
            $table->string('nim',40)->required()->after('bobot');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transkrip', function (Blueprint $table) {
            $table->dropForeign(['nim']);
            $table->dropColumn('nim');
        });
    }
};
