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
            $table->date('tanggal_periksa_2')->nullable()->after('tanggal_periksa');
            $table->date('tanggal_periksa_3')->nullable()->after('tanggal_periksa_2');
            $table->decimal('usg_trimester_3', 8, 2)->nullable()->after('tanggal_periksa_2');
            $table->enum('urin_reduksi', ['negatif', '+1', '+2', '+3', '+4'])->nullable()->after('usg_trimester_3');
            $table->enum('tempat_melahirkan', ['fktp', 'fkrtl'])->nullable()->after('urin_reduksi');
            $table->longText('penjelasan')->nullable()->after('tempat_melahirkan');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->dropColumn([
                'tanggal_periksa_2',
                'tanggal_periksa_3',
                'usg_trimester_3',
                'urin_reduksi',
                'tempat_melahirkan',
                'penjelasan'
            ]);
        });
    }
};
