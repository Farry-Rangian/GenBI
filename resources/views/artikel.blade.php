
@extends('layouts.main')

@section('container')
@if ($artikels->count())
  <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?nature,water" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h3 class="card-title">{{ $artikels[0]->judul }}</h3>
        <p class="card-text">
          <small class="text-muted">
            By : {{ $artikels[0]->user->name }}
            {{ $artikels[0]->created_at->diffForHumans()}}
          </small>
        </p>
      <p class="card-text">{{ $artikels[0]->excerpt }}</p>
      <a href="/artikel/{{ $artikels[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>
@else
  <p class="text-center fs-4">No post Found</p>
@endif

<div class="container">
  <div class="row">
    @foreach ($artikels->skip(1) as $artikel)
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400/?nature" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
              <a href="/artikel/{{ $artikel->slug }}">{{ $artikel->judul }}</a>
          </h5>
          <p class="card-text">
            <small class="text-muted">
              By : {{ $artikel->user->name }}
              {{ $artikel->created_at->diffForHumans()}}
            </small>
          </p>
          <p class="card-text">{{ $artikel->excerpt }}</p>
          <a href="/artikel/{{ $artikel->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection