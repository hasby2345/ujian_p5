@extends('layout.layout')

@section('content')
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
</style>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="" style="width: 18rem;">
                <div class=" mb-3" style="width: 40rem">
                    <img src="img/kelas1.png" class="card-img-top shadow" alt="..." style="width: 40rem">
                    <div class="card-body">
                        <h5 class="card-title">Ruang Kelas</h5>
                        <p class="card-text">Ruang untuk pelajaran biasa</p>
                        {{-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p> --}}
                    </div>
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
</div>
@endsection
