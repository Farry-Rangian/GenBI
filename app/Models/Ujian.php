<?php

namespace App\Models;

use App\Models\Pertanyaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ujian extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}
