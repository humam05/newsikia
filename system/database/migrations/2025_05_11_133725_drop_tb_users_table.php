<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('tb_users');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Jika ingin bisa rollback, bisa buat ulang tabel atau kosongkan
        Schema::create('tb_users', function ($table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->nullable();
            $table->timestamps();
        });
    }
};
