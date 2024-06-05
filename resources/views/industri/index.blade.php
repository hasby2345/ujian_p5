@extends('layoud.layout')
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
                    <div class="card-header"> Data Industri
                        <a href="{{route('industri.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th class="col-md-2">Nama Jurusan</th>
                                    <th class="col-md-2">Nama Industri</th>
                                    <th class="col-md-2">Alamat</th>
                                    <th class="col-md-2">Tahun Kerja</th>
                                </tr>
                                </thead>
                                @php $no = 1; @endphp
                                <tbody>
                                @foreach ($industri as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->jurusan->nama_jurusan}}</td>
                                    <td>{{$item->nama_industri}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->thn_kerja}}</td>
                                    <td>
                                     <form action="{{route('industri.destroy',$item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('industri.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{route('industri.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
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
