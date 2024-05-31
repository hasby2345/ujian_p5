@extends('layout.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Fasilitas
                        <a href="{{ route('jurusan.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="">Jurusan</label>
                                    <select name="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror"
                                        id="" value="{{ old('nama_jurusan', $jurusan->nama_jurusan)}}">
                                        <option value="">Jurusan</option>
                                        <option value="RPL">RPL</option>
                                        <option value="TKRO">TKRO</option>
                                        <option value="TBSM">TBSM</option>
                                        @error('nama_jurusan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
