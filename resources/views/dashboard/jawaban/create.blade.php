@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Isi Jawaban</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/ujian/jawaban/create">
        @csrf
        <div class="mb-3">
            <label for="pertanyaan" class="form-label">Pertanyaan</label>
            <select class="form-select" name="pertanyaan_id">
                @foreach ($pertanyaans as $pertanyaan)
                    <option value="{{ $pertanyaan->id }}">{{ $pertanyaan->nama_pertanyaan }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
          <label for="isian" class="form-label">Jawaban</label>
          <input type="text" class="form-control" id="isian" name="isian">
        </div>
        <button type="submit" class="btn btn-primary">Create Question</button>
    </form>
</div>
@endsection
