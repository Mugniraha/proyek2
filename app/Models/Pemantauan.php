<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemantauan extends Model
{
    use HasFactory;
    protected $table = 'pemantauan';
    protected $primaryKey = 'idPemantauan';
    protected $fillable = ['idPemantauan','progres','keterangan','ggambar','idPesanan','idAdmin'];

    public function pesanan() {
        return $this->belongsTo(Pesanan::class, 'idPesanan');
    }

}
