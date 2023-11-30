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
        Schema::create('form_js', function (Blueprint $table) {
            $table->integer('id_formjs')->primary();
            $table->string('nama');
            $table->string('telpon');
            $table->string('jenisJasa');
            $table->string('deskripsi');
            $table->string('alamat');
            $table->string('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_js');
    }
};
