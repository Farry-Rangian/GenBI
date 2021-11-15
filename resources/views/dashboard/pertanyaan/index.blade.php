@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <a href="/dashboard/ujian/pertanyaan/create" class="btn btn-primary mb-3">Tambah Pertanyaan</a>
            <article>
                @foreach ($pertanyaans as $pertanyaan)
                    <h5> 
                        {{ $pertanyaan->nama_pertanyaan }}
                    </h5>
                @endforeach
                
            </article>
            <br>
            <a href="/dashboard/ujian" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Ujian</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
        </div>
    </div>
</div>

@endsection