@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row">
    @foreach ($kegiatans as $kegiatan)
    <div class="col-md-4 mb-3">
      <div class="card">
        @if ($kegiatan->image)
            <img src="{{ asset('storage/'. $kegiatan->image) }}" alt="" class="img-fluid">
        @else
          <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
        @endif
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection