@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>{{ $ujian->nama_ujian }}</h2>
                @foreach ($pertanyaans as $pertanyaan)
                    <p>
                        {{ $pertanyaan->nama_pertanyaan }}
                    </p>
                    <p>
                        {{ $pertanyaan->jawaban }}
                    </p>
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