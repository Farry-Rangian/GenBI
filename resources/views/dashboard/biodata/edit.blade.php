@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Kegiatan</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/biodata/{{ $biodata->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="user_sex" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="user_sex">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" name="agama">
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Kristen Katolik">Kristen Katolik</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="komisariat" class="form-label">Komisariat</label>
            <select class="form-select" name="komisariat">
                <option value="Universitas Sam Ratulangi">Universitas Sam Ratulangi</option>
                <option value="Universitas Negeri Manado">Universitas Negeri Manado</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required autofocus value="{{ $biodata->tempat_lahir }}">
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required autofocus value="{{ $biodata->tanggal_lahir }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required autofocus value="{{ $biodata->alamat }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Biodata</button>
    </form>
</div>
@endsection
