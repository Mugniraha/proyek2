<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'idProduk';
    protected $fillable = ['idProduk','namaProduk','gambar','kategori','bahan','panjang','lebar','tinggi','warna','deskripsi_produk','harga','wishlist'];

}
