@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ujian</h1>
</div>

@foreach ($ujians as $ujian)
<div class="card" style="width: 18rem;">
  <img src="/img/ujian.png" class="card-img-top" alt="ujian">
  <div class="card-body">
    <h5 class="card-title">{{ $ujian->nama_ujian }}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/dashboard/ujian/{{ $ujian->slug }}" class="btn btn-primary">Masuk</a>
  </div>
</div>
@endforeach


@endsection