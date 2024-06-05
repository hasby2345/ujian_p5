@extends('layout.layout')

@section('content')
@php
$fasilitas = \App\Models\Fasilitas::orderBy('id', 'asc') ->get();
@endphp
<style>
    h5 {
        font-family: "Rubik", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }

    p {
        font-family: "Rubik", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }

    h2 {
        text-align: center;
    }

    .container {

        border-radius: 200px;
    }
</style>

<div class="container ">
    <div class="row">
        <div class="col">
            <h2 class="mt-4 mb-5">Fasilitas</h2>
            <h5>Untuk menunjang proses pembelajaran, kami menyediakan peralatan yang up to date yang sesuai
                dengan kebutuhan Dunia Industri serta memiliki unit produksi di SMK Assalaam yang menjadi laboratorium
                langsung bagi siswa dalam mengembangkan keterampilan kejuruannya.
            </h5>
        </div>
    </div>
</div>
<hr>
<div class="container">

    <div class="row mb-4 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($fasilitas as $item)
        <div class="col">
            <div class="card shadow-sm ">
                <img src="{{asset('/images/fasilitas/' . $item->foto)}}" style="width: 420px;" alt="">
                <div class="card-body">
                    <p class="card-text">{{ $item->nama_fasilitas }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col">
                <div class="" style="width: 10rem;">
                    <div class=" mb-3" style="width: 40rem">
                        @foreach ($fasilitas as $item)
                        <img src="{{asset('/images/fasilitas/' . $item->foto)}}" style="width: 400px;" alt="">
                        <h5>{{ $item->nama_fasilitas }}</h5>
                        <p></p>
                        @endforeach
                    </div>
                </div>
                <div class="" style="width: 18rem;">
                    <div class=" mb-3" style="width: 40rem">
                        <img src="img/tkr.jpg" class="card-img-top" alt="..." style="width: 40rem">
                        <div class="card-body">
                            <h5 class="card-title">RUANG PRAKTEK TKRO</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="" style="width: 18rem;">
                    <div class=" mb-3" style="width: 40rem">
                        <img src="img/lab.jpg" class="card-img-top" alt="..." style="width: 40rem">
                        <div class="card-body">
                            <h5 class="card-title">Lab Rekayasa Perangkat Lunak</h5>
                            <p>Ruang tempat untuk praktek jurusan RPL</p>
                        </div>
                    </div>
                </div>
                <div class="" style="width: 18rem;">
                    <div class=" mb-3" style="width: 40rem">
                        <img src="img/tsm.jpg" class="card-img-top" alt="..." style="width: 40rem">
                        <div class="card-body">
                            <h5 class="card-title">RUANG PRAKTEK TBSM</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional
                                content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection
