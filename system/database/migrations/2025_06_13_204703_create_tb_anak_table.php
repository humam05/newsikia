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
        Schema::create('tb_anak', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('identitas_id'); // Foreign key ke tb_identitas

            $table->string('anak_nama')->nullable();
            $table->string('anak_nik', 16)->nullable();
            $table->string('anak_jkn')->nullable();
            $table->string('anak_faskes_tk1')->nullable();
            $table->string('anak_faskes_rujukan')->nullable();
            $table->string('anak_tempat_lahir')->nullable();
            $table->date('anak_tanggal_lahir')->nullable();
            $table->string('anak_alamat', 500)->nullable();
            $table->integer('anak_ke')->nullable();
            $table->string('anak_akta_kelahiran')->nullable();
            $table->string('anak_gol_darah', 3)->nullable();

            $table->timestamps();

            // Foreign key ke tabel tb_identitas
            $table->foreign('identitas_id')->references('id')->on('tb_identitas')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_anak');
    }
};
