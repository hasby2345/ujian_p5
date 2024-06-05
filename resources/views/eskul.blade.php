@extends('layout.layout')
@section('content')
@php
    $eskul = \App\Models\Eskul::orderBy('id', 'asc') ->get();
@endphp
<style>
    .card-body{
        border: .500px;
     }
</style>
<div class="container">

    <div class="row mt-4 mb-5 row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($eskul as $item)
        <div class="col">
            <div class="card shadow-sm ">
                <img src="{{asset('/images/eskul/' . $item->foto)}}" style="width: 420px;" alt="">
                <div class="card-body ">
                    <p class="card-text">{{ $item->eskul }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>{{ $item->deskripsi }}</h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
