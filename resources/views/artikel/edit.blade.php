@extends('layoud.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Edit Artikel
                        <a href="{{ route('artikel.index') }}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('artikel.update', $artikel->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="nis">Judul</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                            name="judul" value="{{ old('judul', $artikel->judul) }}">
                                        @error('judul')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="nis">Deskripsi</label>
                                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                            name="deskripsi" value="{{ old('deskripsi', $artikel->deskripsi) }}">
                                        @error('deskripsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="nis">Tanggal</label>
                                        <input type="date" class="form-control @error('tgl') is-invalid @enderror"
                                            name="tgl" value="{{ old('tgl', $artikel->tgl) }}">
                                        @error('tgl')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2">
                                        <label for="foto">Foto</label>
                                        @if ($artikel->foto)
                                            <p><img src="{{ asset('images/artikel/' . $artikel->foto) }}" alt="foto"
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
