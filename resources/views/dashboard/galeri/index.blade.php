@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Galeri</h1>
</div>

<div class="table-responsive col-lg-8">
  <a href="/dashboard/galeri/create" class="btn btn-primary mb-3">Buat Galeri</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($galeris as $galeri)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $galeri->judul }}</td>
          <td>
            <a href="/dashboard/galeri/{{ $galeri->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/galeri/{{ $galeri->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/galeri/{{ $galeri->id }}" method="post" class="d-inline">
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