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
        Schema::table('pesanan', function (Blueprint $table) {
            $table->string('namaPesanan')->after('idPesanan'); // Ganti tipe data sesuai kebutuhan
        });

        // Hapus kolom idProduk (foreign key)
        Schema::table('pesanan', function (Blueprint $table) {
            $table->dropForeign(['idProduk']);
            $table->dropColumn('idProduk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('pesanan', function (Blueprint $table) {
            $table->dropColumn('namaPesanan');
            // Tambah kembali kolom idProduk (foreign key)
            $table->unsignedBigInteger('idProduk');
            $table->foreign('idProduk')->references('id')->on('produk');
        });
    }
};
