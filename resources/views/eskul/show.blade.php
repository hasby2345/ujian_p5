@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Eskul
                    <a href="{{route('eskul.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Eskul</label>
                        <b>{{$eskul->eskul}}</b>
                    </div>
                    <div class="mb-2">
                        <label for="">Deskripsi</label>
                        <b>{{$eskul->deskripsi}}</b>
                    </div>
                    <div class="mb-2">
                        <img src="{{ asset('/images/eskul/' . $eskul->foto) }}" alt="" style="width: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
