<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaTrimesterTable extends Migration
{
    public function up()
    {
        Schema::create('periksa_trimester', function (Blueprint $table) {
            $table->id();

            // Foreign Key ke tb_identitas
            $table->unsignedBigInteger('identitas_id');
            $table->foreign('identitas_id')->references('id')->on('tb_identitas')->onDelete('cascade');
            $table->string('nama_dokter')->nullable();
            $table->date('tanggal_periksa')->nullable();

            // Pemeriksaan Fisik (enum: Normal / Tidak normal)
            $table->enum('konjungtiva', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('sklera', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('kulit', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('leher', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('gigi_mulut', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('tht', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('dada', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('paru', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('perut', ['Normal', 'Tidak normal'])->nullable();
            $table->enum('tungkai', ['Normal', 'Tidak normal'])->nullable();


            // USG Trimester I
            $table->date('hpht')->nullable();
            $table->enum('keterangan_haid', ['Teratur', 'Tidak Teratur'])->nullable();
            $table->integer('umur_kehamilan_hpht')->nullable();
            $table->date('hpl_hpht')->nullable();
            $table->integer('umur_kehamilan_usg')->nullable();
            $table->date('hpl_usg')->nullable();

            $table->enum('jumlah_gs', ['Tunggal', 'Kembar'])->nullable();
            $table->decimal('diameter_gs', 5, 2)->nullable();
            $table->string('umur_diameter_gs')->nullable();
            $table->enum('jumlah_bayi', ['Tunggal', 'Kembar'])->nullable();
            $table->decimal('crl', 5, 2)->nullable();
            $table->string('umur_crl')->nullable();
            $table->enum('letak_produk_kehamilan', ['Intrauterin', 'Ektopik', 'Tidak Dapat ditentukan'])->nullable();
            $table->enum('pulsasi_jantung', ['Terlihat', 'Tidak Terlihat'])->nullable();
            $table->enum('temuan_abnormal', ['ya', 'tidak'])->nullable();



            // Pemeriksaan Laboratorium
            $table->decimal('hemoglobin', 5, 2)->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('rhesus')->nullable();
            $table->decimal('gula_darah_sewaktu', 5, 2)->nullable();
            $table->string('hasil_h')->nullable();
            $table->string('hasil_s')->nullable();
            $table->string('hasil_hepatitis_b')->nullable();

            // Skrining Kesehatan Jiwa
            $table->boolean('skrining_kesehatan_jiwa')->nullable();
            $table->string('tindak_lanjut_jiwa')->nullable();
            $table->boolean('perlu_rujukan')->nullable();

            $table->text('kesimpulan')->nullable();
            $table->text('rekomendasi')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('periksa_trimester');
    }
}
