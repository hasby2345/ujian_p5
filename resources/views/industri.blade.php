@extends('layout.layout')
@section('content')
<style>
    .card-title {
        text-align: center;
    }
</style>
@php
$industri = \App\Models\Industri::orderBy('id', 'asc') ->get();
@endphp
{{-- <div class="card" style="width: 18rem;">
    @foreach ($industri as $item)
    <div class="card-body">
        <h5 class="card-title">{{ $item->nama_industri }}</h5>

        <h6 class="card-subtitle mb-2">{{ $item->jurusan->nama_jurusan }}</h6>
        <h6 class="card-subtitle mb-2">{{ $item->alamat }}</h6>
        <h6 class="card-subtitle mb-2">{{ $item->thn_kerja }}</h6>
    </div>
    @endforeach
</div> --}}
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($industri as $item)
        <div class="col">
            <div class="card shadow-sm ">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->nama_industri }}</h5>

                    <h6 class="card-title mb-2">{{ $item->jurusan->nama_jurusan }}</h6>
                    <h6 class="card-title mb-2">{{ $item->alamat }}</h6>
                    <h6 class="card-title mb-2">{{ $item->thn_kerja }}</h6>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endsection
