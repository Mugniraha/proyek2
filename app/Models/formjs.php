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

    protected $primaryKey = 'idJasa';
    protected $fillable = ['idJasa', 'namaJasa','kategoriJasa','deskripsiJasa','alamat','tanggal','user_id','status','tanggal_selesai'];

>>>>>>> 457fa1e90c91943ccab5117508878ed002c19d5b
    protected $dates = ['created_at', 'updated_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
