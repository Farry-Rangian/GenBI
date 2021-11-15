@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ujian</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/ujian/create">
        @csrf
        <div class="mb-3">
            <label for="nama_ujian" class="form-label">Nama Ujian</label>
            <input type="text" class="form-control" id="nama_ujian" name="nama_ujian">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug">
        </div>
        <button type="submit" class="btn btn-primary">Create Ujian</button>
    </form>
</div>
@endsection
