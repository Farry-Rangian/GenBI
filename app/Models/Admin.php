<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kegiatan()
    {
        return $this->hasMany(Kegiatan::class);
    }
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
