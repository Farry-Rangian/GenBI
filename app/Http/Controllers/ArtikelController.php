<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel', [
            "title" => "Artikel",
            "artikels" => Artikel::all()
        ]);
    }

    public function show(Artikel $artikel)
    {
        return view('artikel1', [
            "title" => "Artikel",
            "artikel" => $artikel
        ]);
    }
}
