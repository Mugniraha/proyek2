<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Formjs extends Model
{
    use HasFactory;
    protected $table = 'jasa_service';



    protected $primaryKey = 'idJasa';
    protected $fillable = ['idJasa', 'namaJasa','kategoriJasa','deskripsiJasa','alamat','tanggal','idUser','status','tanggal_selesai'];


    protected $dates = ['created_at', 'updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'idUser', 'idUser');
    }

}
