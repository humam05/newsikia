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
        // Jangan tambah kolom lagi karena sudah ada
        $table->foreign('fasyankes_id')->references('id')->on('tb_fasyankes')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
   public function down()
{
    Schema::table('tb_bidan', function (Blueprint $table) {
        $table->dropForeign(['fasyankes_id']);
    });
}

};
