@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Biodata Saya</h1>
</div>
@foreach ($biodatas as $biodata)

<h2>KOMISARIAT: {{ $biodata->komisariat }}</h2>
<h2>NAMA: {{ $biodata->user->name }}</h2>
<ul class="list-group">
  <li class="list-group-item">Jenis Kelamin: {{ $biodata->user_sex }}</li>
  <li class="list-group-item">Tempat tanggal lahir: {{ $biodata->tempat_lahir }} {{ $biodata->tanggal_lahir }}</li>
  <li class="list-group-item">Email: {{ $biodata->user->email }}</li>
  <li class="list-group-item">No WA: {{ $biodata->user->no_telp}}</li>
  <li class="list-group-item">Alamat: {{ $biodata->alamat}}</li>
</ul>
@endforeach

@endsection