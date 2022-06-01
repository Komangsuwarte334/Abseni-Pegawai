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
                            <h1 class="m-0">Profil</h1>
                            <br>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('profil') }}">Profil</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Profil</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-body">
                        <form action="{{ url('update-profil', $Usr->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-lg-12">
                                <div class="card-header">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nik</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="nik" class="form-control"
                                                    value="{{ $Usr->nik }} ">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $Usr->name }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Tanggal Lahir</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="date" name="tglhr" class="form-control"
                                                    value="{{ $Usr->tglhr }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">No Telp</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="no_telp" class="form-control"
                                                    value="{{ $Usr->no_telp }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="text" name="email" class="form-control"
                                                    value="{{ $Usr->email }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <textarea class="form-control" name="alamat" id="alamat">{{ $Usr->alamat }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Image</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input class="form-control" type="file" id="image" name="image">
                                            </div>
                                        </div>

                                        <div class="col-md-2 pr-md-1">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </form>



                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>


        <!-- Main Footer -->
        <footer class="main-footer">
            @include('Template.footer')
            @include('sweetalert::alert')
        </footer>
    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    @include('Template.scrip')
</body>

</html>
