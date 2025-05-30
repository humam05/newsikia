<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTrimesterToPeriksaTrimesterTable extends Migration
{
    public function up()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->string('trimester')->nullable()->after('tanggal_periksa');
        });
    }

    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->dropColumn('trimester');
        });
    }
}
