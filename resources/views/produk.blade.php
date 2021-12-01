@extends('layouts.main')

@section('container')
    <article>
        @if ($produk->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/'. $produk->image) }}" alt="" class="img-fluid mt-3">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
        @endif
        <h2>{{ $produk->nama_produk }} Harga : Rp.{{ $produk->harga_produk }}</h2>
        <p>Penjual: {{ $produk->user->name }}</p>
        {!! $produk->deskripsi !!}
        <p>Hub: {{ $produk->user->no_telp }}</p>
    </article>
    <form action="" method="POST">
        @csrf
        <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="">
        <input class="btn btn-primary" type="submit" value="Add Cart">
    </form>
    <a href="/toko">Back to Toko</a>
@endsection