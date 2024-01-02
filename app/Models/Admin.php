<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'admin';
    protected $primaryKey = 'idAdmin';
    protected $fillable = [
        'idAdmin',
        'namaAdmin',
        'alamatAdmin',
        'emailAdmin',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Change user password.
     *
     * @param  string  $oldPassword
     * @param  string  $newPassword
     * @return bool
     */


    public function changePassword($oldPassword, $newPassword)
    {
        // Pastikan password lama sesuai
        if (!Hash::check($oldPassword, $this->password)) {
            return false;
        }

        // Update password baru
        $this->password = Hash::make($newPassword);
        $this->save();

        return true;
    }


}
