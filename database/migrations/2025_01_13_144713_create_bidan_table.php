<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bidan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bidan');
            $table->string('nik')->unique();
            $table->string('no_telpon');
            $table->string('email')->unique();
            $table->foreignId('fasyankes_id')
                  ->constrained('tb_fasyankes')
                  ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_bidan');
    }
}
