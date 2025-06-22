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
    Schema::table('tb_posyandu', function (Blueprint $table) {
        $table->unsignedBigInteger('fasyankes_id')->after('id');
        // Jika kolom ini foreign key ke tabel fasyankes
        // $table->foreign('fasyankes_id')->references('id')->on('fasyankes')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('tb_posyandu', function (Blueprint $table) {
        $table->dropColumn('fasyankes_id');
        // $table->dropForeign(['fasyankes_id']);
    });
}
};
