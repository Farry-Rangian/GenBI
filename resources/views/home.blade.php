@extends('layouts.main')

@section('container')
  <h1>Halaman Home</h1>
  @if ($kegiatans->count())
  <div class="card mb-3">
    @if ($kegiatans[0]->image)
      <div style="max-height: 350px;max-width:1200px; overflow:hidden">
        <img src="{{ asset('storage/'. $kegiatans[0]->image) }}" alt="" class="img-fluid">
      </div>
    @else
      <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
    @endif
    <div class="card-body text-center">
      <h3 class="card-title">{{ $kegiatans[0]->name }}</h3>
        <p class="card-text">
          <small class="text-muted">
            By : {{ $kegiatans[0]->user->name }}
            {{ $kegiatans[0]->created_at->diffForHumans()}}
          </small>
        </p>
      <p class="card-text">{!! $kegiatans[0]->content !!}</p>
      <a href="/kegiatans/{{ $kegiatans[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>
@else
  <p class="text-center fs-4">No post Found</p>
@endif
  <br>
  <br>
@if ($artikels->count())
  <div class="card mb-3">
    @if ($artikels[0]->image)
      <div style="max-height: 350px; overflow:hidden">
        <img src="{{ asset('storage/'. $artikels[0]->image) }}" alt="" class="img-fluid mt-3">
      </div>
    @else
      <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
    @endif
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
@endsection