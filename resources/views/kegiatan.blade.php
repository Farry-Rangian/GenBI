@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $kegiatan->name }}</h2>
        <h3>{{ $kegiatan->komisariat }}</h3>
        <p>Create by: {{ $kegiatan->admin->name }}</p>
        <img src="https://source.unsplash.com/1200x400/?nature,water" width="1000px" alt="">
        {!! $kegiatan->content !!}
    </article>

    <a href="/kegiatans">Back to Kegiatan</a>
@endsection