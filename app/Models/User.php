<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function biodata()
    {
        return $this->hasOne(Biodata::class);
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }
    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
