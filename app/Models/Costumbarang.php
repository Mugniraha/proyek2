<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumbarang extends Model
{
    use HasFactory;
    protected $table = 'pesanan';

    protected $fillable = [
        'idPesanan',
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
        'idUser',
        'idProduk'
    ];
    

    public $timestamps = false;
}
