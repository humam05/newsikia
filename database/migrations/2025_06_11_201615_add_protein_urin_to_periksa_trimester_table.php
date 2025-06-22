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
            $table->string('protein_urin')->nullable()->after('urin_reduksi');
        });
    }

    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->dropColumn('protein_urin');
        });
    }
};
