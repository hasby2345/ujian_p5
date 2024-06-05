@extends('layoud.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card-md-8">
            <div class="card">
                <div class="card-header">Data industri
                    <a href="{{route('industri.index')}}" class="btn btn-sm btn-primary"
                        style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{route('industri.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="">Nama Jurusan</label>
                                    <select name="id_jurusan"
                                        class="form-control @error('id_jurusan') is-invalid @enderror" id="">
                                        <option value="">Pilih Jurusan</option>
                                        @foreach ($jurusan as $data)
                                        <option value="{{$data->id}}">{{$data->nama_jurusan}}</option>
                                        @endforeach
                                    </select>
                                    @error('nama_jurusan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Nama Industri</label>
                                    <input type="text" class="form-control @error('nama_industri') is-invalid @enderror"
                                        name="nama_industri">
                                    @error('nama_industri')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        name="alamat">
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="">Tahun Kerja</label>
                                    <input type="date" class="form-control @error('thn_kerja') is-invalid @enderror"
                                        name="thn_kerja">
                                    @error('thn_kerja')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-sm btn-success" type="submit">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
