<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->enum('rencana_konsultasi', [
                'gizi',
                'kebidanan',
                'anak',
                'penyakit dalam',
                'neurologi',
                'tht',
                'psikiatri',
                'lain lain'
            ])->nullable()->after('efw_tbj_sesuai');

            $table->enum('rencana_melahirkan', [
                'normal',
                'pervaginam berbantu',
                'sectio caesaria'
            ])->nullable()->after('rencana_konsultasi');

            $table->enum('rencana_kontrasepsi', [
                'akdr',
                'pil',
                'suntik',
                'steril',
                'mal',
                'implan',
                'belum memilih'
            ])->nullable()->after('rencana_melahirkan');

            $table->enum('konseling', ['ya', 'tidak'])
                ->nullable()
                ->after('rencana_kontrasepsi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->dropColumn([
                'rencana_konsultasi',
                'rencana_melahirkan',
                'rencana_kontrasepsi',
                'konseling',
            ]);
        });
    }
};
