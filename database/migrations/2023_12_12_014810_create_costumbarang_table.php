<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumbarangTable extends Migration
{
    public function up()
    {
        Schema::create('costumbarang', function (Blueprint $table) {
            $table->id();
            $table->string('bahan')->nullable();
            $table->string('warna')->nullable();
            $table->integer('panjang')->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('tinggi')->nullable();
            $table->integer('jumlah_pesanan')->nullable();
            $table->string('metode_pengiriman')->nullable();
            $table->text('keterangan_tambahan')->nullable();
            // Kolom lain sesuai kebutuhan

            // Contoh untuk timestamps jika diperlukan
            // $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('costumbarang');
    }
}
?>