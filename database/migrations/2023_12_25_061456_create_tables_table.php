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
        // Tabel Users
        Schema::create('newUsers', function (Blueprint $table) {
            $table->id('idUser');
            $table->string('username')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('telp');
            $table->string('profil')->nullable();
            $table->string('password');
            $table->timestamps();
        });

        // Tabel Alamat
        Schema::create('alamat', function (Blueprint $table) {
            $table->id('idAlamat');
            $table->string('nama_alamat')->nullable();
            $table->string('rt_rw')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->timestamps();
        });

        // Tabel Admin
        Schema::create('admin', function (Blueprint $table) {
            $table->id('idAdmin');
            $table->string('namaAdmin')->nullable();
            $table->string('profil')->nullable();
            $table->string('alamatAdmin')->nullable();
            $table->string('emailAdmin');
            $table->string('password');
            $table->timestamps();
        });

        // Tabel Produk
        Schema::create('produk', function (Blueprint $table) {
            $table->id('idProduk');
            $table->string('namaProduk');
            $table->string('gambar');
            $table->string('kategori');
            $table->string('bahan');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('tinggi');
            $table->string('warna');
            $table->text('deskripsi_produk');
            $table->float('harga', 10, 2);
            $table->timestamps();
        });

        // Tabel Jasa Service
        Schema::create('jasa_service', function (Blueprint $table) {
            $table->id('idJasa');
            $table->string('namaJasa');
            $table->text('deskripsiJasa');
            $table->string('kategoriJasa');
            $table->string('alamat');
            $table->date('tanggal');
            $table->string('status')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->timestamps();
        });

        // Tabel Pesanan
        Schema::create('pesanan', function (Blueprint $table) {
            $table->string('idPesanan',8);
            $table->integer('jumlahItem');
            $table->float('totalHarga', 10, 2);
            $table->string('metodePengiriman');
            $table->text('deskripsiPesanan');
            $table->string('bahan');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('tinggi');
            $table->string('warna');
            $table->string('statusPesanan')->nullable();
            $table->string('statusPembayaran')->nullable();
            $table->date('tanggalPemesanan');
            $table->timestamps();
        });

        // Tabel Wishlist
        Schema::create('wishlist', function (Blueprint $table) {
            $table->id('idKeranjang');
            $table->timestamps();
        });

        // Tabel Ulasan
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id('idUlasan');
            $table->text('isiUlasan');
            $table->timestamps();
        });

        // Tabel Pemantauan
        Schema::create('pemantauan', function (Blueprint $table) {
            $table->id('idPemantauan');
            $table->integer('progres');
            $table->string('keterangan');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });

        // Tabel Pembayaran
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('idPembayaran');
            $table->string('metodePembayaran');
            $table->string('buktiPembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
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
