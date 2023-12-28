<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formjs extends Model
{
    use HasFactory;
    protected $table = 'jasa_service';

    protected $primaryKey = 'idJasa';
    protected $fillable = ['idJasa', 'namaJasa','kategoriJasa','deskripsiJasa','alamat','tanggal','user_id','status','tanggal_selesai'];

    protected $dates = ['created_at', 'updated_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
