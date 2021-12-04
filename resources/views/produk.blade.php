@extends('layouts.main')

@section('container')
    {{-- <article>
        @if ($produk->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/'. $produk->image) }}" alt="" class="img-fluid mt-3">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
        @endif
        <h2>{{ $produk->nama_produk }} Harga : Rp.{{ $produk->harga_produk }}</h2>
        <p>Penjual: {{ $produk->user->name }}</p>
        {!! $produk->deskripsi !!}
        <p>Hub: {{ $produk->user->no_telp }}</p>
    </article>
    <form action="" method="POST">
        @csrf
        <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="">
        <input class="btn btn-primary" type="submit" value="Add Cart">
    </form>
    <a href="/toko">Back to Toko</a> --}}

    <div class="container">
        <div class="card shadow">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{ asset('storage/'. $produk->image) }}" alt="" class="img-fluid mt-3">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $produk->nama_produk }}
                    </h2>

                    <hr>
                    <label class="fw-bold"> Harga : Rp {{ $produk->harga_produk}}</label>
                    <p class="mt-3">
                        {!! $produk->deskripsi !!}
                    </p>
                    <p class="mt-3">
                       {{ $produk->user->no_telp }}
                    </p>
                    <hr>
                    <form method="post" action="/toko/{produk:slug}" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <label for="jumlah_barang">Jumlah Barang</label>
                                <input type="number" value="1" min="1" class="form-control" style="width: 100px" name="jumlah_barang">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function (){
        $('.increment-btn').click(function (e) {
            e.preventDefault();

            var inc_value = $('.qty-input').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value < 10)
            {
                value++;
                $('.qty-input').val(value);
            }
        });
    });
</script>
@endsection