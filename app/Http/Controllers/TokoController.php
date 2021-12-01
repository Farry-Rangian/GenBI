<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produk;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko', [
            "title" => "Toko",
            "produks" => Produk::with('user')->latest()->get()
        ]);
    }
    public function show(Produk $produk)
    {
        return view('produk', [
            "title" => "produk",
            "produk" => $produk->load('user'),
        ]);
    }
}
