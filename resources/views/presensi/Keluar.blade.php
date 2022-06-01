<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>

    @include('Template.head')
    <script src="{{ asset('Js/jam.js') }}"></script>
    <style>
        #watch {
            color: rgb(99, 65, 252);
            position: absolute;
            z-index: 1;
            height: 40px;
            width: 700px;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            font-size: 10vw;
            -webkit-text-stroke: 3px rgb(210, 65, 36);
            text-shadow: 4px 4px 10px rgba(210, 65, 36, 0.4),
                4px 4px 20px rgba(210, 45, 26, 0.4),
                4px 4px 30px rgba(210, 25, 16, 0.4),
                4px 4px 40px rgba(210, 15, 06, 0.4);
        }

    </style>

</head>

<body class="hold-transition white-mode sidebar-mini layout-fixed  layout-footer-fixed" onload="realtimeClock()">

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
                            <h1 class="m-0">Absensi Pulang</h1>
                            <br>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float m-0">
                                    <li class="breadcrumb-item"><a href="#">Absensi</a>
                                    </li>
                                    <li class="breadcrumb-item active">Absensi Pulang</li>
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
            @if (session('info'))
                <div class="alert alert-danger" class="close">
                    {{ session('info') }}
                </div>
            @endif

            <!-- Main content -->
            <div class="content">
                <div class="card card-info card-outline">
                    <div class="card-body">
                        <br><br> <br> <br>
                        <form action="{{ route('ubah-presensi') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <center>
                                    <label id="clock" style="font-size: 100px; color:  #de0a0a;">

                                    </label>
                                </center>
                            </div>
                            <center>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Klik Untuk
                                        Absensi
                                        Pulang</button>
                                </div>
                            </center>
                        </form>
                    </div>
                    <br><br> <br> <br> <br>
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
