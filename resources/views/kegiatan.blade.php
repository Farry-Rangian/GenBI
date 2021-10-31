@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $kegiatan->name }}</h2>
        <h3>{{ $kegiatan->komisariat }}</h3>
        <p>Create by: {{ $kegiatan->admin->name }}</p>

        {!! $kegiatan->content !!}

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nama User</th>
                <th scope="col">Kesimpulan</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Tanggal</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($presensis as $presensi)
              <tr>
                <td>{{ $presensi->user->name }}</td>
                <td>{{ $presensi->kesimpulan }}</td>
                <td>{{ $presensi->user->no_telp }}</td>
                <td>{{ $presensi->updated_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </article>

    <a href="/kegiatans">Back to Kegiatan</a>
@endsection