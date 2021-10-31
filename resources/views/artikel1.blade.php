
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $artikel->judul }}</h2>
        <h5>Author By : {{ $artikel->user->name }}</h5>

        {!! $artikel->content !!}
        
    </article>

    <a href="/artikel">Back to Artikel</a>
@endsection