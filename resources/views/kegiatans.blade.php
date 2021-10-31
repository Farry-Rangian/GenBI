@extends('layouts.main')

@section('container')
  @foreach ($kegiatans as $kegiatan)
  <article class="mb-5">
    <h2>
      <a href="/kegiatans/{{ $kegiatan->id }}">{{ $kegiatan->name }}</a>
    </h2>
    <p>{{ $kegiatan->content }}</p>
  @endforeach
@endsection