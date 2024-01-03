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
        'idUser'
    ];
    

    public $timestamps = false;
}
