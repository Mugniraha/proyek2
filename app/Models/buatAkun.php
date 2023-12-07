<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buatAkun extends Model
{
    use HasFactory;
    protected $table = 'buat_akun';
    protected $fillable = ['username', 'nama_lengkap', 'email', 'telpon', 'alamat'];
}
