@extends('layouts.main')

@section('container')
@if ($kegiatans->count())
  <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400/?nature,water" class="card-img-top" alt="...">
    <div class="card-body text-center">
      <h3 class="card-title">{{ $kegiatans[0]->name }}</h3>
        <p class="card-text">
          <small class="text-muted">
            By : {{ $kegiatans[0]->admin->name }}
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

<div class="container">
  <div class="row">
    @foreach ($kegiatans->skip(1) as $kegiatan)
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/500x400/?nature" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">
            <a href="/kegiatans/{{ $kegiatan->slug }}">{{ $kegiatan->name }}</a>
          </h5>
          <p class="card-text">
            <small class="text-muted">
              By : {{ $kegiatan->admin->name }}
              {{ $kegiatan->created_at->diffForHumans()}}
            </small>
          </p>
          <p>{!! $kegiatan->content !!}</p>
          <a href="/kegiatans/{{ $kegiatan->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection