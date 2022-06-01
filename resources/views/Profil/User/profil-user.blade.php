<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <title>SI Absensi Pegawai|Profil</title>
    @include('Template.head')

</head>

<body class="hold-transition sidebar-mini">

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

                                    <li class="breadcrumb-item active">Profil</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <div class="card-body">
                            <form action="{{ route('edit-profil', $Usr->id) }}" method="post">
                                {{ csrf_field() }}

                                <div class="row gutters-sm">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    @if ($Usr->image)
                                                        <div style="max-height: 430px; overflow:hidden;">
                                                            <img src="{{ asset('storage/' . $Usr->image) }}"
                                                                alt="Admin" class="rounded-circle" width="400px"
                                                                height="430px" border-radius="50%">
                                                            {{-- height150px; overflow: hidden; border-radius:
                                                                50%;> --}}
                                                        </div>
                                                    @else
                                                        <img src="{{ asset('Gambar/default.svg') }}" alt="Admin"
                                                            class="rounded-circle" width="400">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-8">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <dl class="row">
                                                    <dt class="col-sm-2">Nik</dt>
                                                    <dd class="col-sm-9">: {{ $Usr->nik }}</dd>
                                                </dl>
                                                <hr>
                                                <dl class="row">
                                                    <dt class="col-sm-2">Name</dt>
                                                    <dd class="col-sm-9">: {{ $Usr->name }}</dd>
                                                </dl>
                                                <hr>
                                                <dl class="row">
                                                    <dt class="col-sm-2">No Telp</dt>
                                                    <dd class="col-sm-9">: {{ $Usr->no_telp }}</dd>
                                                </dl>
                                                <hr>
                                                <dl class="row">
                                                    <dt class="col-sm-2">Email</dt>
                                                    <dd class="col-sm-9">: {{ $Usr->email }}</dd>
                                                </dl>
                                                <hr>
                                                <dl class="row">
                                                    <dt class="col-sm-2">Tanggal Lahir</dt>
                                                    <dd class="col-sm-9">: {{ $Usr->tglhr }}</dd>
                                                </dl>
                                                <hr>
                                                <dl class="row">
                                                    <dt class="col-sm-2">Alamat</dt>
                                                    <dd class="col-sm-9">: {{ $Usr->alamat }}</dd>
                                                </dl>
                                                <hr>
                                                <input type="submit" name="submit" class="btn btn-primary" value="Edit">


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


        <!-- Main Footer -->

        <footer class="main-footer">
            @include('Template.footer')
            @include('sweetalert::alert')
        </footer>

    </div>

</body>
@include('Template.scrip')

</html>
