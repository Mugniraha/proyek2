<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'newusers';
    protected $primaryKey ='idUser';
    protected $fillable = [
        'username',
        'name',
        'telp',
        'email',
        'password',
        'profil',
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

    /**
     * Get the user's address.
     */
    public function alamat()
    {
        return $this->hasOne(Alamat::class, 'idUser', 'idUser');
    }

    /**
     * Update user profile information.
     *
     * @param  string  $name
     * @param  string  $email
     * @param  string  $telpon
     * @return void
     */

    public function updateProfileAndAddress(array $userData, array $alamatData)
    {
        $this->update($userData);

        if ($this->alamat) {
            // Jika alamat sudah ada, update alamat
            $this->alamat->update($alamatData);
        } else {
            // Jika alamat belum ada, buat yang baru
            $this->alamat()->create($alamatData);
        }
    }

    }
