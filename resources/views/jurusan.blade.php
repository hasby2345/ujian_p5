@extends('layout.layout')
@section('content')
@php
$jurusan = \App\Models\Jurusan::all();
@endphp
<style>
    .featurette-heading {
        margin-top: 10rem;
    }

    .img {
        width: 200%;
        height: 200%;
    }
</style>
<div class="container marketing">
    <hr class="featurette-divider">

    <div class="row featurette row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col-md-7">
            @foreach ($jurusan as $item)
            <h2 class="featurette-heading">{{ $item->nama_jurusan }}</h2>
            <p class="lead">{{ $item->deskripsi }}</p>
            {{-- <p class="lead">Jurusan Rekayasa Perangkat Lunak merupakan jurusan yang didalamnya mempelajari prinsip
                sekaligus teknik mendesain perangkat lunak yang mudah digunakan dan tepat guna.
                Jurusan yang juga disebut Software Engineering ini bisa menjadi wadah yang tepat bagi kamu yang ingin
                mempelajari desain program dan mengembangkan sebuah</p> --}}
        </div>
        <div class="image-container col-md-5">
            <img src="{{asset('/images/jurusan/' . $item->foto)}}" style="width: 25rem;" width="500" height="500">
            {{-- <img src="img/baju1.png" alt="" style="width: 25rem" width="500" height="500"> --}}
            {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500"
                preserveAspectRatio="xMidYMid slice" focusable="false"> --}}

                {{-- <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                    dy=".3em">500x500</text> --}}
            </svg>
        </div>
        @endforeach

    </div>

    <hr class="featurette-divider">
</div><!-- /.container -->

@endsection
