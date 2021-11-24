@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>{{ $galeri->judul }}</h2>
                @if ($galeri->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/'. $galeri->image) }}" alt="" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
                    {!! $galeri->desc !!}
                </article>
                
            </article>
            <br>
            <a href="/dashboard/galeri" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all Galeri</a>
            <a href="/dashboard/galeri/{{ $galeri->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/galeri/{{ $galeri->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
  
                <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection