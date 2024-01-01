<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan', function (Blueprint $table) {
            $table->id('idBahan');
            $table->float('besi')->default(0);
            $table->float('stainless_steel')->default(0);
            $table->float('alumunium')->default(0);
            $table->float('baja_ringan')->default(0);

            // Tambahkan kolom lain sesuai kebutuhan

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bahan');
    }
}
