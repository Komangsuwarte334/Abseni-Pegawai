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
                            <h1 class="m-0">Tambah Pegawai</h1>
                            <br>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('data-pegawai') }}">Data Pegawai</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tambah Pegawai</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="col-12 col-md-15">
                        <div class="card-body">
                            <div class="card-body register-card-body">
                                <form action="{{ route('simpanregistrasi') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label for="nik">Nik</label>
                                                <input type="text" id="nik" name="nik"
                                                    class="form-control @error('nik') is-invalid @enderror"
                                                    value="{{ old('nik') }}">
                                                @error('nik')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-md-1">
                                            <div class="form-group">
                                                <label for="name">Fullname</label>
                                                <input type="text" id="name" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label for="no_telp">No Telp</label>
                                                <input type="text" id="no_telp" name="no_telp"
                                                    class="form-control @error('no_telp') is-invalid @enderror"
                                                    value="{{ old('no_telp') }}">
                                                @error('no_telp')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" id="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label for="tglhr">Tanggal lahir</label>
                                                <input type="date" id="tglhr" name="tglhr"
                                                    class="form-control @error('tglhr') is-invalid @enderror"
                                                    value="{{ old('tglhr') }}">
                                                @error('tglhr')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <textarea class="form-control" name="alamat" id="alamat @error('tglhr') is-invalid @enderror"
                                                    value="{{ old('alamat') }}"></textarea>
                                                @error('alamat')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="card-body border-top py-0 my-3">
                                            <h4 class="text-muted my-3">Akun</h4>
                                            <div class="row">
                                                <div class="col-md-6 pl-md-1">
                                                    <div class="form-group">
                                                        <label for="username">Username</label>
                                                        <input type="text" id="username" name="username"
                                                            class="form-control @error('username') is-invalid @enderror"
                                                            value="{{ old('username') }}">
                                                        @error('username')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pr-md-1">
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="password" id="password" name="password"
                                                            class="form-control @error('password') is-invalid @enderror">
                                                        @error('password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-1 pr-md-1">
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-block">Simpan</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')

        </footer>


        <!-- REQUIRED SCRIPTS -->

        @include('Template.scrip')

    </div>
</body>


</html>
