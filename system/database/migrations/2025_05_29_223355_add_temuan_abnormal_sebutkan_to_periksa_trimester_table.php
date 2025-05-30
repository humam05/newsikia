<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTemuanAbnormalSebutkanToPeriksaTrimesterTable extends Migration
{
    public function up()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->string('temuan_abnormal_sebutkan')->nullable()->after('temuan_abnormal');
        });
    }

    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->dropColumn('temuan_abnormal_sebutkan');
        });
    }
}
