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
                            <h1 class="m-0">Detail Absensi</h1>
                            <br>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float m-0">
                                    <li class="breadcrumb-item"><a href="{{ route('laporan') }}">Laporan Absensi</a>
                                    </li>
                                    <li class="breadcrumb-item active"> Detail Absensi</li>
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

                            <a href="{{ route('cetak-absensi') }}" target="_blank" class="btn btn-primary">Cetak Data
                                <i class="fas fa-print"></i></a>
                        </div>
                        <div class="form-group">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>Nama Pegawai</th>
                                    <th>Nik</th>
                                    <th>Tanggal</th>
                                    <th>Jam Masuk</th>
                                    <th>Jam Keluar</th>
                                    <th>Jumlah Jam Kerja</th>
                                </tr>

                                @foreach ($presensi as $item)
                                    <tr>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->user->nik }}</td>
                                        <td>{{ $item->tgl }}</td>
                                        <td>{{ $item->jammasuk }}</td>
                                        <td>{{ $item->jamkeluar }}</td>
                                        <td>{{ $item->jamkerja }}</td>
                                    </tr>
                                @endforeach
                            </table>
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
