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
        Schema::table('tb_pemeriksaan_balita', function (Blueprint $table) {
            // Hapus foreign key terlebih dahulu
            $table->dropForeign(['identitas_id']);

            // Baru hapus kolomnya
            $table->dropColumn('identitas_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_pemeriksaan_balita', function (Blueprint $table) {
            $table->unsignedBigInteger('identitas_id')->nullable();

            // Kalau dulu ada relasi, bisa dikembalikan begini (optional)
            $table->foreign('identitas_id')->references('id')->on('tb_identitas')->onDelete('cascade');
        });
    }
};
