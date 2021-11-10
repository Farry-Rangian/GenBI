@extends('dashboard.layouts.main')

@section('container')
{{-- <div class="container">
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
</div> --}}

<div class="content">
    <div class="no_soal">
        <h3>Soal Nomor 1</h3>
    </div>
    <div class="pertanyaan">
        <h4>Apa Itu BI-7 Day Reverse Repo Rate (BI7DRR)?</h4>
    </div>
    <div class="jawaban">
        <form method="post" action="">
            <input type="text" class="isi" size="90" />
            <br>
            <input type="submit" name="submit" value="Submit"
                style="height: 30px; width: 100px; border-radius: 5px;" />
        </form>
    </div>
</div>
<div class="daftar-soal">
    <h3>Daftar Soal</h3>
</div>
<div class="list-soal">
    <ul>
        <a href="soal-1.html">
            <li style="background-color: lightblue;">1</li>
        </a>
        <a href="soal-2.html">
            <li>2</li>
        </a>
        <a href="soal-3.html">
            <li>3</li>
        </a>
        <a href="soal-4.html">
            <li>4</li>
        </a>
        <a href="soal-5.html">
            <li>5</li>
        </a>
        <a href="soal-6.html">
            <li>6</li>
        </a>
        <a href="soal-7.html">
            <li>7</li>
        </a>
        <a href="soal-8.html">
            <li>8</li>
        </a>
        <a href="soal-9.html">
            <li>9</li>
        </a>
        <a href="soal-10.html">
            <li>10</li>
        </a>
    </ul>
</div>
@endsection