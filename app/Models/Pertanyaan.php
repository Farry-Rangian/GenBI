<?php

namespace App\Models;

use App\Models\Ujian;
use App\Models\Jawaban;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function ujian()
    {
        return $this->belongsTo(Ujian::class);
    }

    public function Jawaban()
    {
        return $this->hasmany(Jawaban::class);
    }
}
