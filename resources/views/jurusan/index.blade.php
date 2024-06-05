@extends('layoud.layout')
@section('content')
<!-- Bootstrap Core CSS -->
<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="{{ asset('admin/css/metisMenu.min.css') }}" rel="stylesheet">

<!-- Timeline CSS -->
<link href="{{ asset('admin/css/timeline.css') }}" rel="stylesheet">

<!-- Custom CSS -->
<link href="{{ asset('admin/css/startmin.css') }}" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="{{ asset('admin/css/morris.css') }}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                <div class="alert alert-success fade show" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <div class="card ">
                    <div class="card-header"> Data Jurusan
                        <a href="{{route('jurusan.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="datatable">
                                <thead>
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th class="col-md-2">Nama Jurusan</th>
                                    <th class="col-md-2">Deskripsi</th>
                                    <th class="col-md-2">Foto</th>
                                </tr>
                                </thead>
                                @php $no = 1; @endphp
                                <tbody>
                                @foreach ($jurusan as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->nama_jurusan}}</td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td align="center"><img src="{{asset('/images/jurusan/' . $item->foto)}}" style="width: 100px;" alt=""></td>
                                    <td>
                                     <form action="{{route('jurusan.destroy',$item->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{route('jurusan.edit', $item->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{route('jurusan.show', $item->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
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
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ asset('admin/js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ asset('admin/js/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris.min.js') }}"></script>
        <script src="{{ asset('admin/js/morris-data.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('admin/js/startmin.js"></script>
@endsection
