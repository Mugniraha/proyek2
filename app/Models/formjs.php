<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formjs extends Model
{
    use HasFactory;
    protected $table = 'jasa_service';
    protected $primaryKey = 'idJasa';
    protected $fillable = ['idJasa', 'namaJasa',
    'deskripsiJasa',
    'harga',
    'kategoriJasa',
    'alamat',
    'tanggal',
    'status','user_id'];
    protected $dates = ['created_at', 'updated_at'];
}
