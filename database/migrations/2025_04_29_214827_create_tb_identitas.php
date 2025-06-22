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
        Schema::create('data_ibu_hamil', function (Blueprint $table) {
            $table->id();

            // Data Ibu
            $table->string('ibu_nama')->nullable();
            $table->string('ibu_nik')->nullable();
            $table->string('ibu_jkn')->nullable();
            $table->string('ibu_faskes_tk1')->nullable();
            $table->string('ibu_faskes_rujukan')->nullable();
            $table->string('ibu_ttl')->nullable();
            $table->string('ibu_pendidikan')->nullable();
            $table->string('ibu_pekerjaan')->nullable();
            $table->string('ibu_gol_darah')->nullable();
            $table->string('ibu_telepon')->nullable();
            $table->text('ibu_alamat')->nullable();
            $table->string('ibu_asuransi_lain')->nullable();
            $table->string('ibu_asuransi_nomor')->nullable();
            $table->date('ibu_asuransi_berlaku')->nullable();

            // Data Suami/Keluarga
            $table->string('suami_nama')->nullable();
            $table->string('suami_nik')->nullable();
            $table->string('suami_jkn')->nullable();
            $table->string('suami_faskes_tk1')->nullable();
            $table->string('suami_faskes_rujukan')->nullable();
            $table->string('suami_ttl')->nullable();
            $table->string('suami_pendidikan')->nullable();
            $table->string('suami_pekerjaan')->nullable();
            $table->string('suami_gol_darah')->nullable();
            $table->string('suami_telepon')->nullable();
            $table->text('suami_alamat')->nullable();
            $table->string('suami_asuransi_lain')->nullable();
            $table->string('suami_asuransi_nomor')->nullable();
            $table->date('suami_asuransi_berlaku')->nullable();

            // Data Anak
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

            // Fasilitas Kesehatan
            $table->string('puskesmas')->nullable();
            $table->string('kohort_ibu')->nullable();
            $table->string('kohort_bayi')->nullable();
            $table->string('kohort_balita')->nullable();
            $table->string('medik_rs')->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_identitas');
    }
};
