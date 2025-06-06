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
            $table->enum('hasil_hepatitis_b', ['reaktif', 'nonreaktif'])->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->string('hasil_hepatitis_b')->nullable()->change();
        });
    }
};
