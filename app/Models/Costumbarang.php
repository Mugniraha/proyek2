<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costumbarang extends Model
{
    use HasFactory;
    protected $table = 'costumbarang';

    protected $fillable = [
        'bahan','warna', 'panjang', 'lebar', 'tinggi', 'jumlah_pesanan', 'metode_pengiriman', 'keterangan_tambahan',
    ];

    public $timestamps = false;
}
