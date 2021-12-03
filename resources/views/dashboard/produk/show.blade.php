@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="card shadow">
        <div class="row">
            <div class="col-md-4 border-right">
                <img src="{{ asset('storage/'. $produk->image) }}" alt="" class="img-fluid mt-3">
            </div>
            <div class="col-md-8">
                <h2 class="mb-0">
                    {{ $produk->nama_produk }}
                </h2>

                <hr>
                <label class="fw-bold"> Harga : Rp {{ $produk->harga_produk}}</label>
                <p class="mt-3">
                    {!! $produk->deskripsi !!}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection