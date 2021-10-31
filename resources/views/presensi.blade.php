@extends('layouts.main')

{{-- @dd($user->presensi) --}}
@section('container')
  <h1>Halaman Presensi</h1>
  <h4>{{ $user->name }}</h4>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nama Kegiatan</th>
        <th scope="col">Kesimpulan</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($presensis as $presensi)
      <tr>
        <td>{{ $presensi->kegiatan->name }}</td>
        <td>{{ $presensi->kesimpulan }}</td>
        <td>{{ $presensi->updated_at }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection