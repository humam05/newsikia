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
            $table->text('keluhan')->nullable()->after('konseling');
            $table->text('pemeriksaan')->nullable()->after('keluhan');
            $table->text('tindakan')->nullable()->after('pemeriksaan');
            $table->text('saran')->nullable()->after('tindakan');
            $table->date('tanggal_kembali')->nullable()->after('saran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('periksa_trimester', function (Blueprint $table) {
            $table->dropColumn([
                'keluhan',
                'pemeriksaan',
                'tindakan',
                'saran',
                'tanggal_kembali',
            ]);
        });
    }
};
