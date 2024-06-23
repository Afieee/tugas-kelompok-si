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
            $table->string('id_nilai',300)->required()->after('nim');
            $table->foreign('id_nilai')->references('id_nilai')->on('nilai')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transkrip', function (Blueprint $table) {
            $table->dropForeign(['id_nilai']);
            $table->dropColumn('id_nilai');
        });
    }
};
