@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Presensi</h1>
</div>

<a href="/dashboard/presensi/create" class="btn btn-primary mb-3">Isi Presensi</a>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Kegiatan</th>
          <th scope="col">Kesimpulan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($presensis as $presensi)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $presensi->kegiatan->name }}</td>
          <td>{{ $presensi->kesimpulan }}</td>
          {{-- <td>
            <a href="/dashboard/presensi/{{ $presensi->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
          </td> --}}
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection