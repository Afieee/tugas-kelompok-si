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
        Schema::table('perwalian', function (Blueprint $table) {
            $table->integer('id_matakuliah')->required()->after('nim');
            $table->foreign('id_matakuliah')->references('id_matakuliah')->on('matakuliah')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perwalian', function (Blueprint $table) {
            $table->dropForeign(['id_matakuliah']);
            $table->dropColumn('id_matakuliah');
        });
    }
};
