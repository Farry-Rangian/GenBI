@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>{{ $artikel->judul }}</h2>
                <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
                <article class="my-3 fs-5">
                    {!! $artikel->content !!}
                </article>
                
            </article>
            <br>
            <a href="/dashboard/artikels" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my articles</a>
            <a href="/dashboard/artikels/{{ $artikel->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/artikels/{{ $artikel->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
  
                <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection