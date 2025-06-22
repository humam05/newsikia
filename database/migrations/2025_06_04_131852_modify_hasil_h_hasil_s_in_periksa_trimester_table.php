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
            $table->enum('hasil_h', ['reaktif', 'nonreaktif'])->nullable()->change();
            $table->enum('hasil_s', ['reaktif', 'nonreaktif'])->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->string('hasil_h')->nullable()->change();
            $table->string('hasil_s')->nullable()->change();
        });
    }
};

