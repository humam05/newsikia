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
        Schema::table('tb_ortu', function (Blueprint $table) {
            if (!Schema::hasColumn('tb_ortu', 'nik')) { // Pastikan kolom belum ada sebelum menambahkan
                $table->string('nik')->after('nama')->nullable();
            }
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('tb_ortu', function (Blueprint $table) {
            $table->dropColumn('nik');
        });
    }

};
