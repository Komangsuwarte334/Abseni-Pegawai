<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>

    @include('Template.head')
</head>

<body class="hold-transition white-mode sidebar-mini layout-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Pegawai</h1>
                            <br>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float m-0">

                                    <li class="breadcrumb-item active">Data Pegawai</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alert -->
            @if (session('status'))
                <div class="alert alert-success" class="close">
                    {{ session('status') }}
                </div>
            @endif


            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">

                        <div class="card-tools">

                            <a href="{{ route('datapegawai') }}" class="btn btn-primary">Tambah Data <i
                                    class="fas fa-plus-square"></i></a>

                            <a href="{{ route('cetak-pegawai') }}" target="_blank" class="btn btn-primary">Cetak Data
                                <i class="fas fa-print"></i></a>
                        </div>
                        <br>

                        <div class="form-inline">
                            <div class="col-md-4">
                                <form method="GET" action="{{ url('data-pegawai') }}">
                                    <input class="form-control form-control-sidebar" class="from-control" type="text"
                                        name="keyword" placeholder="Cari Data Pegawai" />
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">

                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Nama</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tgl Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>

                            </tr>
                            @foreach ($dtUser as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nik }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->no_telp }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ date('d/m/y', strtotime($item->tglhr)) }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <a href="{{ url('edit-pegawai', $item->id) }}"
                                            class="btn btn-primary btn-sm"> <i class="fas fa-edit"></i></a>

                                        <form action="{{ url('delete-pegawai', $item->id) }}" method="get"
                                            class="d-inline" onsubmit="return confirm('yakin hapus data')">
                                            @method('destroy')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </form>


                                    </td>

                                </tr>
                            @endforeach


                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $dtUser->links() }}

                    </div>
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>

    <!-- Script-->
    @include('Template.scrip')

</body>

</html>
