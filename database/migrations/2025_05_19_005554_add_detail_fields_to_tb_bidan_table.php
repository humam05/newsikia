<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tb_bidan', function (Blueprint $table) {
            $table->string('tempat_lahir')->nullable()->after('email');
            $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
            $table->text('alamat_lengkap')->nullable()->after('tanggal_lahir');
            $table->string('provinsi')->nullable()->after('alamat_lengkap');
            $table->string('kabupaten')->nullable()->after('provinsi');
            $table->string('kecamatan')->nullable()->after('kabupaten');
            $table->string('desa')->nullable()->after('kecamatan');
        });
    }

    public function down(): void
    {
        Schema::table('tb_bidan', function (Blueprint $table) {
            $table->dropColumn([
                'tempat_lahir',
                'tanggal_lahir',
                'alamat_lengkap',
                'provinsi',
                'kabupaten',
                'kecamatan',
                'desa',
            ]);
        });
    }
};
