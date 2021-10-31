@extends('layouts.main')

@section('container')
@foreach ($kegiatans as $kegiatan)
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $kegiatan->name }}</h5>
    <p class="card-text">{{ $kegiatan->content }}</p>
    <a href="/kegiatans/{{ $kegiatan->id }}" class="btn btn-primary">See More</a>
  </div>
</div>
@endforeach
@endsection