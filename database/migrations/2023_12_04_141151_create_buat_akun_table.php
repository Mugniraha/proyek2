<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buat_akun', function (Blueprint $table) {
            $table->id();
            $table->string('profile');
            $table->string('username');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('telpon');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buat_akun');
    }
};
