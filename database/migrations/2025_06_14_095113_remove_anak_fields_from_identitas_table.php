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
        Schema::table('tb_identitas', function (Blueprint $table) {
            $table->dropColumn([
                'anak_nama',
                'anak_nik',
                'anak_jkn',
                'anak_faskes_tk1',
                'anak_faskes_rujukan',
                'anak_tempat_lahir',
                'anak_tanggal_lahir',
                'anak_alamat',
                'anak_ke',
                'anak_akta_kelahiran',
                'anak_gol_darah',
            ]);
        });
    }
    /**
     * Reverse the migrations.
     */
   public function down(): void
    {
        Schema::table('tb_identitas', function (Blueprint $table) {
            $table->string('anak_nama')->nullable();
            $table->string('anak_nik')->nullable();
            $table->string('anak_jkn')->nullable();
            $table->string('anak_faskes_tk1')->nullable();
            $table->string('anak_faskes_rujukan')->nullable();
            $table->string('anak_tempat_lahir')->nullable();
            $table->date('anak_tanggal_lahir')->nullable();
            $table->text('anak_alamat')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->string('anak_akta_kelahiran')->nullable();
            $table->string('anak_gol_darah')->nullable();
        });
    }
};
