    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('Template.head')
        <script src="{{ asset('Js/jam.js') }}"></script>
        <style>
            #watch {
                color: rgb(252, 150, 65);
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

    <body class="hold-transition white-mode sidebar-mini layout-fixed  layout-footer-fixed" onload=" realtimeClock()">
        <div class="wrapper">

            <!-- Navbar -->
            @include('Template.navbar')

            <!-- Main Sidebar Container -->
            @include('Template.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Home</h1>
                                <br>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float m-0">
                                        <li class="breadcrumb-item"><a>Home</a>
                                        </li>

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
                            <div class="container-fluid">
                                <h4 class="my-0">Selamat datang di</h4>
                                <p class="lead">Aplikasi absensi online berbasis website Perusahaan XYZ.
                                </p>
                                <hr class="my-2">
                                <br>
                            </div>
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-6 col-6">

                                            <!-- small box -->
                                            <div class="small-box bg-red">
                                                <div class="inner">
                                                    <h5>{{ $user }}</h5>
                                                    <p>Total User</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-6">
                                            <!-- small box -->
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h5>{{ $presensi }}</h5>
                                                    <p>Total Hadir</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fas fa-swatchbook"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-lg-7 col-6">
                                            <div class="card card-warning">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        <i class="far fa-calendar-alt"></i>
                                                        Calendar
                                                    </h3>
                                                </div>

                                                <!--The calendar -->
                                                <div class="card-body">
                                                    <div id="calendar"
                                                        style="min-height: 250px; height: 250px; max-height: 350px; max-width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-6">
                                            <div class="card card-white">
                                                <div class="card-body">
                                                    <br>
                                                    <center>
                                                        <label id="clock" style="font-size: 70px; color: #1240d6e8;">
                                                        </label>
                                                    </center>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="main-footer">
                @include('Template.footer')
            </footer>


            @include('Template.scrip')

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        events: [],
                        selectOverlap: function(event) {
                            return event.rendering === 'background';
                        }
                    });

                    calendar.render();
                });
            </script>



    </body>

    </html>
