@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article>
                <h2>{{ $kegiatan->name }}</h2>
                @if ($kegiatan->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/'. $kegiatan->image) }}" alt="" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x600/?nature" alt="" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
                    {!! $kegiatan->content !!}
                </article>
                
            </article>
            <br>
            <a href="/dashboard/kegiatans" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my articles</a>
            <a href="/dashboard/kegiatans/{{ $kegiatan->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/kegiatans/{{ $kegiatan->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
  
                <button class="btn btn-danger " onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
            </form>
            <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">nama</th>
                    <th scope="col">Tanggal</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($presensis as $presensi)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $presensi->user->name }}</td>
                    <td>{{ $presensi->created_at }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection