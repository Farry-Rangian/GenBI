@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Artikel</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/galeri/{{ $galeri->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" required autofocus value="{{ $galeri->judul }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Pilih Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $galeri->image }}">
            @if ($galeri->image)
            <img src="{{ asset('storage/' . $galeri->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Deskripsi</label>
            <input id="desc" type="hidden" name="desc" value="{{ $galeri->desc }}">
            <trix-editor input="desc"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update Galeri</button>
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
