@extends('layouts.main')

@section('container')
  <h1>Halaman Galeri</h1>
  <br>
  <br>
  @foreach ($galeris as $galeri)
  <div class="col-md-4 mb-3">
    <div class="card">
      <img src="https://source.unsplash.com/500x400/?nature" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $galeri->judul }}</h5>
        <p class="card-text">{{ $galeri->desc }}</p>
        <a href="/galeris/{{ $galeri->id }}" class="btn btn-primary">See More</a>
      </div>
    </div>
  </div>
  @endforeach
@endsection