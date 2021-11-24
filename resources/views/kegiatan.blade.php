@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $kegiatan->name }}</h2>
        <h3>{{ $kegiatan->komisariat }}</h3>
        <p>Create by: {{ $kegiatan->user->name }}</p>
        @if ($kegiatan->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/'. $kegiatan->image) }}" alt="" class="img-fluid mt-3">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
        @endif
        {!! $kegiatan->content !!}
    </article>

    <a href="/kegiatans">Back to Kegiatan</a>
@endsection