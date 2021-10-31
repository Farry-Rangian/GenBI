@extends('layouts.main')

@section('container')
  <h1>Halaman Galeri</h1>
  <br>
  <br>
  @foreach ($galeris as $galeri)
  <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $galeri->judul }}</h5>
      <p class="card-text">{{ $galeri->desc }}</p>
      <a href="/galeris/{{ $galeri->id }}" class="btn btn-primary">See More</a>
    </div>
  </div>
  @endforeach
@endsection