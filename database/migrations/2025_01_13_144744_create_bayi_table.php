<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bayi', function (Blueprint $table) {
            $table->id();
            
            $table->string('nama_lengkap');
            $table->string('jk_bayi');
            $table->string('tmp_lahir_bayi');
            $table->string('tgl_lahir_bayi');
            $table->foreignId('ortu_id')
                ->constrained('tb_ortu')
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
