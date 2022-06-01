<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>

    @include('Template.head')
</head>

<body class="hold-transition white-mode sidebar-mini layout-fixed  layout-footer-fixed">
    <div class="wrapper ">

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
                            <h1 class="m-0">Edit Data Pegawai</h1>
                            <br>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('data-pegawai') }}">Data Pegawai</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Data Pegawai</li>
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
                    <div class="col-12 col-md-15">

                        <div class="card-body">
                            <form action="{{ url('update-pegawai', $Usr->id) }}" method="post">
                                {{ csrf_field() }}

                                <br>
                                <div class="row">
                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label for="nik">Nik</label>
                                            <input type="text" id="nik" name="nik" class="form-control"
                                                value="{{ $Usr->nik }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-md-1">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="name" name="name" class="form-control"
                                                value="{{ $Usr->name }}">
                                        </div>
                                    </div>
                                    <br> <br> <br><br>
                                    <div class="col-md-4 pr-md-1">
                                        <div class="form-group">
                                            <label for="no_telp">No Telp</label>
                                            <input type="text" id="no_telp" name="no_telp" class="form-control"
                                                value="{{ $Usr->no_telp }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-md-1">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" id="email" name="email" class="form-control"
                                                value="{{ $Usr->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-md-1">
                                        <div class="form-group">
                                            <label for="tglhr">Tanggal Lahir</label>
                                            <input type="date" id="tglhr" name="tglhr" class="form-control"
                                                value="{{ $Usr->tglhr }}">
                                        </div>
                                    </div>
                                    <br> <br> <br><br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="alamat">{{ $Usr->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-1 pr-md-1">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                        </div>
                                    </div>

                                    {{-- <div class="card-body border-top py-0 my-3">
                                        <h4 class="text-muted my-3">Akun</h4>
                                        <div class="row">
                                            <div class="col-md-6 pl-md-1">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" id="username" name="username"
                                                        class="form-control" value="{{ $Usr->username }}">

                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-md-1">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" id="password" name="password"
                                                        class="form-control" value="{{ $Usr->password }}">

                                                </div>
                                            </div>
                                            <div class="col-md-1 pr-md-1">
                                                <div class="form-group">
                                                    <button type="submit"
                                                        class="btn btn-primary btn-block">Simpan</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div> --}}
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
        </footer>
    </div>

    <!-- REQUIRED SCRIPTS -->
    @include('Template.scrip')

</body>

</html>
