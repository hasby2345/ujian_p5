@extends('layoud.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Fasilitas
                    <a href="{{route('fasilitas.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Judul</label>
                        <b>{{$artikel->judul}}</b>
                    </div>
                    <div class="mb-2">
                        <label for="">Deskripsi</label>
                        <b>{{$artikel->deskripsi}}</b>
                    </div>
                    <div class="mb-2">
                        <label for="">Tanggal</label>
                        <b>{{$artikel->tgl}}</b>
                    </div>
                    <div class="mb-2">
                        <img src="{{ asset('/images/artikel/' . $artikel->foto) }}" alt="" style="width: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
