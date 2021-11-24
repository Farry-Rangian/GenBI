@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Kegiatan</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/kegiatans/{{ $kegiatan->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Judul</label>
          <input type="text" class="form-control" id="name" name="name" required autofocus value="{{ $kegiatan->name }}">
        </div>
        <div class="mb-3">
            <label for="admin_id" class="form-label">Admin</label>
            <input type="text" class="form-control" id="admin_id" name="admin_id" required autofocus value="{{ $kegiatan->admin_id }}">
          </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required autofocus value="{{ $kegiatan->slug }}">
        </div>
        <div class="mb-3">
            <label for="komisariat" class="form-label">Komisariat</label>
            <input type="text" class="form-control" id="komisariat" name="komisariat" required autofocus value="{{ $kegiatan->komisariat }}">
        </div>
        <div class="mb-3">
            <label for="galeri" class="form-label">Galeri</label>
            <select class="form-select" name="galeri_id">
                @foreach ($galerys as $galery)
                    @if (old('galeri_id', $kegiatan->galeri_id) == $galery->id)
                        <option value="{{ $galery->id }}" selected>{{ $galery->judul }}</option>
                    @else
                    <option value="{{ $galery->id }}">{{ $galery->judul }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Pilih Gambar</label>
            <input type="hidden" name="oldImage" value="{{ $kegiatan->image }}">
            @if ($kegiatan->image)
            <img src="{{ asset('storage/' . $kegiatan->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
            <label for="content" class="form-label">Content</label>
            <input id="content" type="hidden" name="content" value="{{ $kegiatan->content }}">
            <trix-editor input="content"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update Kegiatan</button>
    </form>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function(){
        fetch('/dashboard/kegiatans/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

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
