@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create a new Question</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/ujian/pertanyaan">
        @csrf
        <div class="mb-3">
            <label for="ujian" class="form-label">Nama Ujian</label>
            <select class="form-select" name="ujian_id">
                @foreach ($ujians as $ujian)
                    <option value="{{ $ujian->id }}">{{ $ujian->nama_ujian }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
          <label for="nama_pertanyaan" class="form-label">Nama Pertanyaan</label>
          <input type="text" class="form-control" id="nama_pertanyaan" name="nama_pertanyaan">
        </div>
        <button type="submit" class="btn btn-primary">Buat Pertanyaan</button>
    </form>
</div>
@endsection
