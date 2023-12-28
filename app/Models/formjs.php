<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formjs extends Model
{
    use HasFactory;
    protected $table = 'jasa_service';
<<<<<<< HEAD
    protected $primaryKey = 'idJasa';
    protected $fillable = ['idJasa', 'namaJasa',
    'deskripsiJasa',
    'harga',
    'kategoriJasa',
    'alamat',
    'tanggal',
    'status','user_id'];
=======

    protected $primaryKey = 'idjasa';
    protected $fillable = ['id_jasa', 'namaJasa', 'jenisJasa', 'deskripsijasa', 'alamat','kategoriJasa', 'tanggal','idUser'];

>>>>>>> 457fa1e90c91943ccab5117508878ed002c19d5b
    protected $dates = ['created_at', 'updated_at'];
}
