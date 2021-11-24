@extends('layouts.main')

@section('container')
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
<div class="container">
  <div class="row">
    @foreach ($kegiatans->skip(1) as $kegiatan)
    <div class="col-md-4 mb-3">
      <div class="card">
        @if ($kegiatan->image)
            <img src="{{ asset('storage/'. $kegiatan->image) }}" alt="" class="img-fluid">
        @else
          <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
        @endif
        <div class="card-body">
          <h5 class="card-title">
            <a href="/kegiatans/{{ $kegiatan->slug }}">{{ $kegiatan->name }}</a>
          </h5>
          <p class="card-text">
            <small class="text-muted">
              By : {{ $kegiatan->user->name }}
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