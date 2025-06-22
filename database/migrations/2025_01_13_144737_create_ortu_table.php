<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ortu', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jk_ortu');
            $table->string('tmp_lahir_ortu');
            $table->string('tgl_lahir_ortu');
            $table->string('tlp');
            $table->string('alamat');
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
        Schema::dropIfExists('tb_ortu');
    }
}
