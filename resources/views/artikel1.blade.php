
@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article>
                <h2>{{ $artikel->judul }}</h2>
                <p class="card-text">
                    <small class="text-muted">
                      By : {{ $artikel->user->name }}
                      {{ $artikel->created_at->diffForHumans()}}
                    </small>
                </p>
                @if ($artikel->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/'. $artikel->image) }}" alt="" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
                @endif
                <article class="my-3">
                    {!! $artikel->content !!}
                </article>
                
            </article>
            <br>
            <a href="/artikel">Back to Artikel</a>
        </div>
    </div>
</div>
    
@endsection