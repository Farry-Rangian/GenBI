@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h5>
                    {{ $jawabans->pertanyaan->nama_pertanyaan }}
                </h5>

                <p>
                    {{ $jawaban}}
                </p>
                
            </article>
            <br>
            <a href="/dashboard/ujian/jawaban" class="btn btn-success"><span data-feather="arrow-left"></span> Back to pertanyaan</a>
            <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
        </div>
    </div>
</div>
@endsection