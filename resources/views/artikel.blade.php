
@extends('layouts.main')

@section('container')
  @foreach ($artikels as $artikel)
      <article class="mb-5">
        <h2>
          <a href="/artikel/{{ $artikel->slug }}">{{ $artikel->judul }}</a>
        </h2>
        <p>{{ $artikel->excerpt }}</p>
      </article>
  @endforeach
@endsection