@extends('layoud.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Fasilitas
                        <a href="{{ route('fasilitas.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="nis">Fasilitas</label>
                                        <input type="text" class="form-control @error('nama_fasilitas') is-invalid @enderror"
                                            name="nama_fasilitas" value="{{ old('nama_fasilitas', $fasilitas->nama_fasilitas) }}">
                                        @error('nama_fasilitas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="foto">Foto</label>
                                        @if ($fasilitas->foto)
                                            <p><img src="{{ asset('images/fasilitas/' . $fasilitas->foto) }}" alt="foto"
                                                    width="100px">
                                            </p>
                                        @endif
                                        <input type="file" name="foto"
                                            class="form-control @error('foto') is-invalid @enderror">
                                        @error('foto')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
