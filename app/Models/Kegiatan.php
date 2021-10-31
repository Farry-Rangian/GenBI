<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }

    public function galeri()
    {
        return $this->belongsTo(Galeri::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

}
