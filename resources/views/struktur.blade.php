@extends('layouts.main')

@section('container')
  <h1>Halaman Ujian</h1>
  <div>
    <div class="content">
        <div class="card">
            <h2>Pilih ujian yang ingin diikuti</h2>
            <div class="head-card">
                <a href="soal-1.html"><img src="/img/ujian.png" alt="ujian-1"></a>

            </div>

            <div class="body-card">
                <a href="soal-1.html">
                    <h1>Ujian Kelayakan</h1>
                    <h4>waktu : 10-11-2021</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad repudiandae fuga facilis
                        dicta
                        fugiat voluptates deleniti libero earum sed aliquid. </p>
                    <svg class="w-6 h-6" fill="none" stroke="#303030" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>

            </div>
        </div>

    </div>
</div>
@endsection