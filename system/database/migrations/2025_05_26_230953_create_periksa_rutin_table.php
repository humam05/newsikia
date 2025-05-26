<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaRutinTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('periksa_rutin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('identitas_id'); // Foreign key ke tabel tb_identitas
            $table->date('tanggal_periksa')->nullable();
            $table->float('berat_badan')->nullable();
            $table->float('tinggi_badan')->nullable(); // ⬅️ Tambahan tinggi badan (cm)
            $table->float('lingkar_lengan')->nullable(); // ⬅️ Tambahan lingkar lengan (cm)
            $table->string('tekanan_darah')->nullable();
            $table->integer('umur_kehamilan')->nullable();
            $table->float('tfu')->nullable(); // Tinggi Fundus Uteri (cm)
            $table->integer('djj')->nullable(); // Denyut Jantung Janin (bpm)
            $table->enum('gerakan_janin', ['ada', 'tidak_ada'])->nullable();
            $table->enum('posisi_janin', ['kepala', 'sungsang', 'lintang'])->nullable();
            $table->string('kaki_bengkak')->nullable();
            $table->text('keluhan')->nullable();
            $table->text('tindakan')->nullable();
            $table->text('catatan')->nullable(); // Catatan tambahan dari bidan
            $table->timestamps();

            // Relasi ke tabel tb_identitas
            $table->foreign('identitas_id')->references('id')->on('tb_identitas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periksa_rutin');
    }
}
