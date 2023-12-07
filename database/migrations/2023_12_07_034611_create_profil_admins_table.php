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
        Schema::create('profil_admins', function (Blueprint $table) {
            $table->integer('id_profil')->primary();
            $table->string('gambar');
            $table->string('nama');
            $table->string('no_hp');
            $table->string('email');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_admins');
    }
};
