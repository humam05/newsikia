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
        Schema::table('tb_pemeriksaan_balita', function (Blueprint $table) {
            $table->unsignedBigInteger('anak_id')->after('id');
            $table->foreign('anak_id')->references('id')->on('tb_anak')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('tb_pemeriksaan_balita', function (Blueprint $table) {
            $table->dropForeign(['anak_id']);
            $table->dropColumn('anak_id');
        });
    }
};
