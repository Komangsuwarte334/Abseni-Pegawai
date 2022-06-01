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
                            <h1 class="m-0">Laporan Absensi</h1>
                            <br>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float m-0">

                                    <li class="breadcrumb-item active">Laporan Absensi</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="label">Tanggal Awal</label>
                            <input type="date" name="tglawal" id="tglawal"
                                class="form-control @error('tglawal') is-invalid @enderror"
                                value="{{ old('tglawal') }}">
                            @error('tglawal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="label">Tanggal Akhir</label>
                            <input type="date" name="tglakhir" id="tglakhir"
                                class="form-control @error('tglakhir') is-invalid @enderror"
                                value="{{ old('tglakhir') }}">
                            @error('tglakhir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="" onclick="this.href='/laporan/'+ document.getElementById('tglawal').value +
                            '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-1">
                                Lihat Data
                            </a>
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


    <!-- script-->
    @include('Template.scrip')
</body>

</html>
