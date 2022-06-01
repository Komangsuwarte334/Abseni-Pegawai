<aside class="main-sidebar sidebar-dark-primary" style="">


    <!-- Brand Logo -->
    <a href="{{ route('HomeAdmin') }}" class="brand-link">

        {{-- <img src="{{ asset('Gambar/sba.png') }}" alt="User Image" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <span class="brand-text font-weight-light text-center">
            <h5>ABSENSI PEGAWAI</h5>
        </span>
        <hr class="my-1">
    </a>

    <br>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">

                <!-- Heading -->
                @if (auth()->user()->level == '1')
                    <li class="nav-header">MENU</li>
                    <li class="nav-item mt-3">
                        <a href="{{ route('HomeAdmin') }}"
                            class="nav-link {{ Request::is('HomeAdmin') ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-home "></i>
                            <p> Home</p>
                        </a>
                    </li>
                @endif
                @if (auth()->user()->level == '2')
                    <li class="nav-header">MENU</li>
                    <li class="nav-item mt-3">
                        <a href="{{ route('HomeUser') }}"
                            class="nav-link {{ Request::is('HomeUser') ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-home "></i>
                            <p> Home</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item mt-2">
                    <a href="{{ route('profil') }}" class="nav-link {{ Request::is('profil*') ? 'active' : '' }} "
                        href="/profil">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p> Profil</p>
                    </a>
                </li>
                @if (auth()->user()->level == '1')
                    <li class="nav-item mt-2 ">
                        <a href="{{ route('data-pegawai') }}"
                            class="nav-link {{ Request::is('data-pegawai*') ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-users"></i>
                            <p> Data Pegawai</p>
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a href="{{ route('laporan') }}"
                            class="nav-link {{ Request::is('laporan*') ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-swatchbook"></i>
                            <p> Laporan</p>
                        </a>
                    </li>
                @endif


                @if (auth()->user()->level == '2')
                    <li class="nav-item  ">
                        <a href="#"
                            class="nav-link {{ Request::is('presensi-masuk', 'presensi-keluar') ? 'active' : '' }}">

                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Absensi
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview ">
                            <li class="nav-item">
                                <a href="{{ route('presensi-masuk') }}"
                                    class="nav-link {{ Request::is('presensi-masuk') ? 'active' : '' }} ">
                                    <i class="nav-icon fas  "></i>
                                    <p>Masuk</p>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('presensi-keluar') }}"
                                    class="nav-link {{ Request::is('presensi-keluar') ? 'active' : '' }} ">
                                    <i class="nav-icon fas  "></i>
                                    <p>Pulang</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif


                <li class="nav-item mt-2">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>


            </ul>
        </nav>

    </div>



</aside>
