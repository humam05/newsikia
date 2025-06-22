<?php
use Illuminate\Support\Facades\DB;
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
        DB::statement("ALTER TABLE tb_pemeriksaan_balita
            MODIFY vitamin_a ENUM('Biru', 'Merah', 'Tidak ada')
            CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL");
    }
    /**
     * Reverse the migrations.
     */
     public function down(): void
    {
        DB::statement("ALTER TABLE tb_pemeriksaan_balita
            MODIFY vitamin_a ENUM('Biru', 'Merah')
            CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL");
    }
};
