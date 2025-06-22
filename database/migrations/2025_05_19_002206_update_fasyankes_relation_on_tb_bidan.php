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
        Schema::table('tb_bidan', function (Blueprint $table) {
            $table->dropForeign(['fasyankes_id']); // hapus foreign key dulu kalau ada
            $table->dropColumn('fasyankes_id');    // hapus kolom fasyankes_id
            $table->string('nama_fasyankes')->nullable()->after('id'); // tambah kolom baru setelah id
        });
    }

    public function down()
    {
        Schema::table('tb_bidan', function (Blueprint $table) {
            $table->dropColumn('nama_fasyankes');
            $table->unsignedBigInteger('fasyankes_id')->nullable();

            // Kalau dulu pakai foreign key, bisa diaktifkan lagi seperti ini:
            // $table->foreign('fasyankes_id')->references('id')->on('tb_fasyankes')->onDelete('set null');
        });
    }
};
