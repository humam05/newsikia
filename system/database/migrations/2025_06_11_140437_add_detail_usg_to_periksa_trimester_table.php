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
            $table->string('presentasi_bayi')->nullable()->after('rekomendasi');
            $table->string('keadaan_bayi')->nullable()->after('presentasi_bayi');
            $table->string('djj')->nullable()->after('keadaan_bayi');
            $table->string('irama_djj')->nullable()->after('djj');
            $table->string('lokasi_plasenta')->nullable()->after('irama_djj');
            $table->string('jumlah_cairan_ketuban')->nullable()->after('lokasi_plasenta');
            $table->float('sdp')->nullable()->after('jumlah_cairan_ketuban');

            // Biometri bayi
            $table->float('bpd')->nullable()->after('sdp');
            $table->string('bpd_sesuai')->nullable()->after('bpd');
            $table->float('hc')->nullable()->after('bpd_sesuai');
            $table->string('hc_sesuai')->nullable()->after('hc');
            $table->float('ac')->nullable()->after('hc_sesuai');
            $table->string('ac_sesuai')->nullable()->after('ac');
            $table->float('fl')->nullable()->after('ac_sesuai');
            $table->string('fl_sesuai')->nullable()->after('fl');
            $table->float('efw_tbj')->nullable()->after('fl_sesuai');
            $table->string('efw_tbj_sesuai')->nullable()->after('efw_tbj');
        });
    }


    /**
     * Reverse the migrations.
     */
   public function down()
{
    Schema::table('periksa_trimester', function (Blueprint $table) {
        $table->dropColumn([
            'presentasi_bayi',
            'keadaan_bayi',
            'djj',
            'irama_djj',
            'lokasi_plasenta',
            'jumlah_cairan_ketuban',
            'sdp',
            'bpd',
            'bpd_sesuai',
            'hc',
            'hc_sesuai',
            'ac',
            'ac_sesuai',
            'fl',
            'fl_sesuai',
            'efw_tbj',
            'efw_tbj_sesuai',
        ]);
    });
}

};
