
@extends('layouts.main')

@section('container')
  <h2>KOMISARIAT: {{ $biodata->komisariat }}</h2>
  <h2>NAMA: {{ $biodata->name }}</h2>
  <ul class="list-group">
    <li class="list-group-item active">Progam Studi: {{ $biodata->program_studi }}</li>
    <li class="list-group-item">Jenis Kelamin: {{ $biodata->jenis_kelamin }}</li>
    <li class="list-group-item">Tempat tanggal lahir: {{ $biodata->tempat_lahir }} {{ $biodata->tanggal_lahir }}</li>
    <li class="list-group-item">Email: {{ $biodata->email }}</li>
    <li class="list-group-item">No WA: {{ $biodata->no_telp}}</li>
  </ul>

@endsection