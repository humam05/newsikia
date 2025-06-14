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
            $table->foreignId('anak_id')
                ->nullable()
                ->constrained('tb_anak')
                ->onDelete('cascade')
                ->after('id'); // 👈 tambahkan posisi setelah kolom id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('periksa_bayi', function (Blueprint $table) {
            $table->dropForeign(['anak_id']);
            $table->dropColumn('anak_id');
        });
    }
};
