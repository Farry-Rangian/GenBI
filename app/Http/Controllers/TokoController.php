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
    public function store(Request $request, Produk $produk)
    {
        $validatedData = $request->validate([
            'jumlah_barang' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['produk_id'] = $produk->id;
    }
}
