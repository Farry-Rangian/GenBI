<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Artikel;
use \App\Models\Kegiatan;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => 'Home',
            "artikels" => Artikel::with('user')->latest()->get(),
            "kegiatans" => Kegiatan::with('user')->latest()->get()
        ]);
    }
}
