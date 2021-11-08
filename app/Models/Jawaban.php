<?php

namespace App\Models;

use App\Models\User;
use App\Models\Pertanyaan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jawaban extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
