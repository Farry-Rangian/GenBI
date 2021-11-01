
@extends('layouts.main')

@section('container')
  <h2>KOMISARIAT: {{ $user->biodata->komisariat }}</h2>
  <h2>NAMA: {{ $user->name }}</h2>
  <ul class="list-group">
    <li class="list-group-item">Jenis Kelamin: {{ $user->biodata->user_sex }}</li>
    <li class="list-group-item">Tempat tanggal lahir: {{ $user->biodata->tempat_lahir }} {{ $user->biodata->tanggal_lahir }}</li>
    <li class="list-group-item">Email: {{ $user->email }}</li>
    <li class="list-group-item">No WA: {{ $user->no_telp}}</li>
    <li class="list-group-item">Alamat: {{ $user->biodata->alamat}}</li>
  </ul>

@endsection