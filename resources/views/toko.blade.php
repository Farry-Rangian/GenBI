@extends('layouts.main')

@section('container')
<div id="carouselExampleIndicators" class="carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slider1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slider2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slider3.jpeg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="container">
  <div class="row">
    @foreach ($produks as $produk)
    <div class="col-md-4 mb-3">
      <div class="card">
        @if ($produk->image)
            <img src="{{ asset('storage/'. $produk->image) }}" alt="" class="img-fluid">
        @else
          <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
        @endif
        <div class="card-body">
          <h5 class="card-title">
            <a href="/toko/{{ $produk->id }}">{{ $produk->nama_produk }}</a>
          </h5>
          <p class="card-text">
            <small class="text-muted">
              Penjual : {{ $produk->user->name }}
              {{ $produk->created_at->diffForHumans()}}
            </small>
          </p>
          <p>Harga : Rp.{!! $produk->harga_produk !!}</p>
          <p>{!! $produk->deskripsi !!}</p>
          <a href="/toko/{{ $produk->id }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection