<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $table = 'user';
    //protected $primaryKey = 'id';
    protected $fillable = ['name', 'telp', 'email', 'password'];
}
