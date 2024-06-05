@extends('layoud.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Eskul
                        <a href="{{ route('eskul.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('eskul.update', $eskul->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="nis">Eskul</label>
                                        <input type="text" class="form-control @error('nama_eskul') is-invalid @enderror"
                                            name="eskul" value="{{ old('eskul', $eskul->eskul) }}">
                                        @error('eskul')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="nis">Deskripi</label>
                                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" value="{{ old('deskripsi', $eskul->deskripsi) }}">
                                        @error('deskripsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="foto">Foto</label>
                                        @if ($eskul->foto)
                                            <p><img src="{{ asset('images/eskul/' . $eskul->foto) }}" alt="foto"
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
