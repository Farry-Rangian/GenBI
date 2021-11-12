@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                    <h5> 
                        <a href="/dashboard/ujian/pertanyaan/{pertanyaan}">
                            {{ $pertanyaan->nama_pertanyaan }}
                        </a>
                    </h5>
                    <p>
                        {{ $jawaban }}
                    </p>
                
            </article>
            <br>
            <a href="/dashboard/ujian/pertanyaan" class="btn btn-success"><span data-feather="arrow-left"></span> Back to Pertanyaan</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
        </div>
    </div>
</div>

@endsection