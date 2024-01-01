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

    // public function updateUserAddress($nama_alamat, $rt_rw, $desa, $kecamatan, $kabupaten)
    // {
    //     $this->nama_alamat = $nama_alamat;
    //     $this->rt_rw = $rt_rw;
    //     $this->desa = $desa;
    //     $this->kecamatan = $kecamatan;
    //     $this->kabupaten = $kabupaten;
    //     $this->save();
    // }

//     public function updateUserAddress(array $alamatData)
// {
//     $this->update($alamatData);
// }

}
