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
        //
        // Tabel Alamat
        Schema::table('alamat', function (Blueprint $table) {
            $table->foreignId('idUser')->constrained('newUsers','idUser');
        });

        // Tabel Jasa Service
        Schema::table('jasa_service', function (Blueprint $table) {
            $table->foreignId('idUser')->constrained('newUsers','idUser');
        });

        // Tabel Pesanan
        Schema::table('pesanan', function (Blueprint $table) {
            $table->foreignId('idUser')->constrained('newUsers','idUser');
            $table->foreignId('idProduk')->constrained('produk','idProduk');
        });

        // Tabel Wishlist
        Schema::table('wishlist', function (Blueprint $table) {
            $table->foreignId('idUser')->constrained('newUsers','idUser');
            $table->foreignId('idProduk')->constrained('produk','idProduk');
        });

        // Tabel Ulasan
        Schema::table('ulasan', function (Blueprint $table) {
            $table->foreignId('idProduk')->constrained('produk','idProduk');
            $table->foreignId('idUser')->constrained('newUsers','idUser');
        });

        // Tabel Pemantauan
        Schema::table('pemantauan', function (Blueprint $table) {
            $table->foreignId('idPesanan')->constrained('pesanan','idPesanan');
            $table->foreignId('idAdmin')->constrained('admin','idAdmin');
        });

        // Tabel Pembayaran
        Schema::table('pembayaran', function (Blueprint $table) {
            $table->foreignId('idPesanan')->constrained('pesanan','idPesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        // Hapus tabel-tabel yang telah dibuat
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('pemantauan');
        Schema::dropIfExists('ulasan');
        Schema::dropIfExists('wishlist');
        Schema::dropIfExists('pesanan');
        Schema::dropIfExists('jasa_service');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('admin');
        Schema::dropIfExists('alamat');
        Schema::dropIfExists('newUsers');
    }
};
