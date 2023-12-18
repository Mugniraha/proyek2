<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formjs extends Model
{
    use HasFactory;
    protected $table = 'form_js';
    protected $fillable = ['nama', 'telpon', 'jenisJasa', 'deskripsi', 'alamat', 'tanggal'];
    protected $dates = ['created_at', 'updated_at'];
}
