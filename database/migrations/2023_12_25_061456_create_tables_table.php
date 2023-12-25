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
            $table->string('profil');
            $table->string('password');
            $table->timestamps();
        });

        // Tabel Alamat
        Schema::create('alamat', function (Blueprint $table) {
            $table->id('idAlamat');
            $table->string('nama_alamat');
            $table->string('rt_rw');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->timestamps();
        });

        // Tabel Admin
        Schema::create('admin', function (Blueprint $table) {
            $table->id('idAdmin');
            $table->string('namaAdmin');
            $table->string('alamatAdmin');
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
            $table->float('harga', 10, 2);
            $table->string('kategoriJasa');
            $table->string('alamat');
            $table->date('tanggal');
            $table->string('status');
            $table->timestamps();
        });

        // Tabel Pesanan
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('idPesanan');
            $table->integer('jumlahItem');
            $table->float('totalHarga', 10, 2);
            $table->string('metodePengiriman');
            $table->text('deskripsiPesanan');
            $table->string('bahan');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->integer('tinggi');
            $table->string('warna');
            $table->date('tanggalPemesanan');
            $table->timestamps();
        });

        // Tabel Wishlist
        Schema::create('wishlist', function (Blueprint $table) {
            $table->id('idKeranjang');
            $table->integer('jumlahItem');
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
            $table->string('statusPesanan');
            $table->string('statusPengiriman');
            $table->timestamps();
        });

        // Tabel Pembayaran
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('idPembayaran');
            $table->string('metodePembayaran');
            $table->float('dpPembayaran', 10, 2);
            $table->float('totalPembayaran', 10, 2);
            $table->string('statusPembayaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
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
        Schema::dropIfExists('userrs');
    }
};
