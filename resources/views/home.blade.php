
@extends('layoud.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

                <!-- NAVBAR -->
                {{-- @include('layoud.header') --}}
                {{-- /NAVBAR --}}

                {{-- SIDEBAR --}}
                @include('layoud.sidebar')
                {{-- /SIDEBAR --}}


            </nav>

            {{-- CONTENT --}}

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Selamat Datang Di Dashboard</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Data Fasilitas</div>
                                <div class="card-body">
                                    <table class="table" border="1">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Fasilitas</th>
                                                <th scope="col">Foto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($fasilitas as $data)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $data->nama_fasilitas }}</td>
                                                    <td>{{ $data->foto }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Data industri</div>
                                <div class="card-body">
                                    <table class="table" border="1">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama industri</th>
                                                <th scope="col">Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($industri as $data)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $data->nama_industri }}</td>
                                                    <td>{{ $data->jurusan->nama_jurusan }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>{{ $data->thn_kerja }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Data penulis</div>
                                <div class="card-body">
                                    <table class="table" border="1">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Tanggal Publikasi</th>
                                                <th scope="col">Nama Penulis</th>
                                                <th scope="col">industri</th>
                                                <th scope="col">Cover</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($artikel as $data)
                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <td>{{ $data->judul }}</td>
                                                    <td>{{ $data->tanggal_publikasi }}</td>
                                                    <td>{{ $data->penulis->nama_penulis}}</td>
                                                    <td>{{ $data->industri->nama_industri }}</td>
                                                    <td><img src="{{asset('images/artikel/' . $data->cover) }}" width="100"> </td>
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
        <!-- /#wrapper -->

    </div>
            <!-- /#page-wrapper -->

        <!-- /#wrapper -->

        <!
        <!-- jQuery -->
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

    </body>
</html>
@endsection
