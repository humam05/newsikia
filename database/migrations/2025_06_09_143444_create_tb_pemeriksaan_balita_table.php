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
        Schema::create('tb_pemeriksaan_balita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('identitas_id');
            $table->date('tanggal_pemeriksaan');

            $table->text('berat_badan')->nullable();
            $table->text('tinggi_badan')->nullable();
            $table->text('lingkar_kepala')->nullable();
            $table->text('lingkar_lengan')->nullable();
            $table->enum('imunisasi', [
                'BCG',
                'Hepatitis B',
                'Polio',
                'DPT-HB-Hib 1',
                'DPT-HB-Hib 2',
                'DPT-HB-Hib 3',
                'Campak',
                'Campak-Rubella',
                'Booster DPT',
                'Booster Polio',
                'Tidak Ada'
            ])->nullable();
            $table->enum('vitamin_a', ['Biru', 'Merah'])->nullable();

            $table->timestamps();

            // Foreign key
            $table->foreign('identitas_id')
                ->references('id')->on('tb_identitas')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pemeriksaan_balita');
    }
};
