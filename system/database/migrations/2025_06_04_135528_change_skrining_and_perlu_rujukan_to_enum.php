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
        Schema::table('periksa_trimester', function (Blueprint $table) {
            // Ubah kolom menjadi ENUM('ya', 'tidak'), nullable
            $table->enum('skrining_kesehatan_jiwa', ['ya', 'tidak'])->nullable()->change();
            $table->enum('perlu_rujukan', ['ya', 'tidak'])->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            // Kembalikan ke tipe sebelumnya, misal tinyint nullable
            $table->tinyInteger('skrining_kesehatan_jiwa')->nullable()->change();
            $table->tinyInteger('perlu_rujukan')->nullable()->change();
        });
    }
};
