@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Presensi</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/presensi">
        @csrf
        <div class="mb-3">
            <label for="kegiatan" class="form-label">Kegiatan</label>
            <select class="form-select" name="kegiatan_id">
                @foreach ($kegiatans as $kegiatan)
                    <option value="{{ $kegiatan->id }}">{{ $kegiatan->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
          <label for="kesimpulan" class="form-label">Kesimpulan</label>
          <input type="text" class="form-control" id="kesimpulan" name="kesimpulan">
        </div>
        <button type="submit" class="btn btn-primary">Isi Presensi</button>
    </form>
</div>
@endsection
