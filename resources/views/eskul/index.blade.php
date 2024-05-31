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
                    <div class="card-header"> Data Eskul
                        <a href="{{route('eskul.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th class="col-md-2">Eskul</th>
                                    <th class="col-md-2">Foto</th>
                                    <th class="col-md-2">Deskripsi</th>
                                </tr>
                                </thead>
                                @php $no = 1; @endphp
                                <tbody>
                                @foreach ($eskul as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->eskul}}</td>
                                    <td align="center"><img src="{{asset('/images/eskul/' . $item->foto)}}" style="width: 100px;" alt=""></td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td>
                                     <form action="{{route('eskul.destroy',$item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('eskul.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{route('eskul.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
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
