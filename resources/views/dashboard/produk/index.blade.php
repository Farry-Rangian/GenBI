@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Toko</h1>
</div>

<a href="/dashboard/toko/create" class="btn btn-primary mb-3">Tambah Produk</a>
<!-- <div class="table-responsive col-lg-8">
  <a href="/dashboard/kegiatans/create" class="btn btn-primary mb-3">Buat Kegiatan Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Created By</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($kegiatans as $kegiatan)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kegiatan->name }}</td>
          <td>{{ $kegiatan->created_at }}</td>
          <td>{{ $kegiatan->user->name }}</td>
          <td> --}}
            {{-- <a href="/dashboard/kegiatans/{{ $kegiatan->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/kegiatans/{{ $kegiatan->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/kegiatans/{{ $kegiatan->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf

              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach --}}
      </tbody>
    </table>
</div> -->

@endsection