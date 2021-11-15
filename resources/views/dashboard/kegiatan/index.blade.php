@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Activity</h1>
</div>

<div class="table-responsive col-lg-8">
  <a href="/dashboard/kegiatans/create" class="btn btn-primary mb-3">Create new Activity</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kegiatans as $kegiatan)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $kegiatan->name }}</td>
          <td>{{ $kegiatan->created_at }}</td>
          <td>
            <a href="/dashboard/kegiatans/{{ $kegiatan->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection