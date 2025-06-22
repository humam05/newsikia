<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tb_fasyankes', function (Blueprint $table) {
            $table->dropSoftDeletes(); // ini akan menghapus kolom deleted_at
        });
    }

    public function down(): void
    {
        Schema::table('tb_fasyankes', function (Blueprint $table) {
            $table->softDeletes(); // jika ingin rollback
        });
    }
};
