<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Kegiatan extends Model
{
    use HasFactory, Sluggable;
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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
