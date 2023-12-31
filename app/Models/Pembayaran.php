<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $primaryKey = 'idPembayaran';
    protected $fillable = ['idPembayaran','metodePembayaran','buktiPembayaran','idPesanan'];
    
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'idPesanan');
    }

}
