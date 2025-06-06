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
            $table->string('diameter_gs')->nullable()->change();
            $table->string('crl')->nullable()->change();
            $table->string('hemoglobin')->nullable()->change();
            $table->string('gula_darah_sewaktu')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->decimal('diameter_gs', 5, 2)->change();
            $table->decimal('crl', 5, 2)->change();
            $table->decimal('hemoglobin', 5, 2)->change();
            $table->decimal('gula_darah_sewaktu', 5, 2)->change();
        });
    }
};
