<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formjs extends Model
{
    use HasFactory;
    protected $table = 'jasa_service';
    protected $primaryKey = 'idjasa';
    protected $fillable = ['id_jasa', 'namaJasa', 'jenisJasa', 'deskripsijasa', 'alamat','kategoriJasa', 'tanggal','idUser'];
    protected $dates = ['created_at', 'updated_at'];
}
