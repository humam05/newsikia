<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUmurBulanToTbPemeriksaanBalitaTable extends Migration
{
    public function up()
    {
        Schema::table('tb_pemeriksaan_balita', function (Blueprint $table) {
            $table->integer('umur_bulan')->nullable()->after('tanggal_pemeriksaan')->comment('Umur bayi dalam bulan');
        });
    }

    public function down()
    {
        Schema::table('tb_pemeriksaan_balita', function (Blueprint $table) {
            $table->dropColumn('umur_bulan');
        });
    }
}
