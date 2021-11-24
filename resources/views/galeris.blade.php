@extends('layouts.main')

@section('container')
  <h1>Halaman Galeri</h1>
  <br>
  <br>
  <div class="container">
    <div class="row">
      @foreach ($galeris as $galeri)
      <div class="col-md-4 mb-3">
        <div class="card">
          @if ($galeri->image)
            <img src="{{ asset('storage/'. $galeri->image) }}" alt="" class="img-fluid mt-3">
          @else
            <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
          @endif
          <div class="card-body">
            <h5 class="card-title">{{ $galeri->judul }}</h5>
            <p class="card-text">{!! $galeri->desc !!}</p>
            <a href="/galeris/{{ $galeri->id }}" class="btn btn-primary">See More</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection