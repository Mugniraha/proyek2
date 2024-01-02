<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamat';
    protected $primaryKey ='idAlamat';

    protected $fillable = [
        'idUser',
        'nama_alamat',
        'rt_rw',
        'desa',
        'kecamatan',
        'kabupaten',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

}
