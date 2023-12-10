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
        Schema::table('galeris', function (Blueprint $table) {
            $table->decimal('panjang', 8, 2)->nullable()->after('nama_produk');
            $table->decimal('lebar', 8, 2)->nullable()->after('panjang');
            $table->decimal('tinggi', 8, 2)->nullable()->after('lebar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galeris', function (Blueprint $table) {
            $table->dropColumn(['panjang', 'lebar', 'tinggi']);
        });
    }
};
