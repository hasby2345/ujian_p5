@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data Jurusan
                    <a href="{{route('jurusan.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Jurusan</label>
                        <b>{{$jurusan->nama_jurusan}}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
