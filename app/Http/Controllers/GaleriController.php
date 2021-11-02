<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        return view('galeris', [
            "title" => "Galeri",
            "galeris" => Galeri::with('kegiatan')->latest()->get()
        ]);
    }
    public function show(Galeri $galeri)
    {
        return view('Galeri', [
            "title" => "Galeri",
            "galeri" => $galeri->load('kegiatan'),
            "kegiatans" => $galeri->kegiatan->load('galeri')
        ]);
    }
}
