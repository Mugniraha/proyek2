<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $primaryKey = 'idPesanan';

    protected $casts = [
        'idPesanan' => 'string',
    ];

    protected $fillable = [
        'idPesanan',
        'namaPesanan',
        'jumlahItem',
        'totalHarga',
        'metodePengiriman',
        'deskripsiPesanan',
        'bahan',
        'panjang',
        'lebar',
        'tinggi',
        'warna',
        'tanggalPemesanan',
        'statusPesanan',
        'statusPembayaran',
        'idUser',
        'idProduk'
    ];


    public $timestamps = false;
    public function produk()
    {
        return $this->belongsTo(\App\Models\Produk::class, 'idProduk', 'idProduk');
    }
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'idPesanan');
    }
    public function pemantauans() {
        return $this->hasMany(Pemantauan::class, 'idPesanan');
    }
}
