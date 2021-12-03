@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produk</h1>
</div>

<a href="/dashboard/produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produks as $produk)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $produk->nama_produk }}</td>
          <td>{{ $produk->harga_produk }}</td>
          <td>
            <a href="/dashboard/produk/{{ $produk->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/produk/{{ $produk->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/produk/{{ $produk->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf

              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach 
      </tbody>
    </table>
</div>

@endsection