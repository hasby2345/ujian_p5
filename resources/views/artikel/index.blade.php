@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                <div class="alert alert-success fade show" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <div class="card ">
                    <div class="card-header"> Data Artikel
                        <a href="{{route('artikel.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th class="col-md-2">Judul</th>
                                    <th class="col-md-2">Deskripsi</th>
                                    <th class="col-md-2">Tanggal</th>
                                    <th class="col-md-2">Foto</th>
                                </tr>
                                </thead>
                                @php $no = 1; @endphp
                                <tbody>
                                @foreach ($artikel as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->judul}}</td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td>{{$item->tgl}}</td>
                                    <td align="center"><img src="{{asset('/images/artikel/' . $item->foto)}}" style="width: 100px;" alt=""></td>
                                    <td>
                                     <form action="{{route('artikel.destroy',$item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('artikel.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{route('artikel.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
                                        <button class="btn btn-sm btn-outline-danger" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
