@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Presensi</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/presensi" enctype="multipart/form-data">
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
        <div class="mb-3">
            <label for="image" class="form-label">Pilih Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Isi Presensi</button>
    </form>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
