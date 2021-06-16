@extends('layouts.appluar')


@section('content')
<div class="content-1 pd-5">
    <div class="card " style="width: 40rem;">
        <div class="card-body">
            <h5 class="card-title">Pendidik dan Tenaga Kependidikan</h5>
            <h6 class="card-subtitle mb-2 text-muted">Daftar Nama-nama Pendidik dan Tenaga Kependidikan</h6>
            <img src="{{ url('image\download (1).jpg')}}" class="img-thumbnail" alt="...">
            <img src="{{ url('image\download (2).jpg')}}" class="img-thumbnail" alt="...">
            <img src="{{ url('image\download (3).jpg')}}" class="img-thumbnail" alt="...">
            <img src="{{ url('image\download.jpg')}}" class="img-thumbnail" alt="..."> <br>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>

@endsection