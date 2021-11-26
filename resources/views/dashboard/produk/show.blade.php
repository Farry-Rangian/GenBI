@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/toko" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all Produk</a>
            <a href="/dashboard/toko/{{ $produk->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/toko/{{ $produk->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
  
                <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>
            <article>
                <h2>{{ $produk->nama_produk }}</h2>
                @if ($produk->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/'. $produk->image) }}" alt="" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
                    {!! $produk->harga_produk !!}
                </article>
            </article>
            <br>
        </div>
    </div>
</div>
@endsection