<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI Absensi Pegawai</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                @if (session()->has('succes'))
                    <div class="alert alert-succes alert-dismissible fade show" role="alert">{{ session('succes') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if ($message = Session::get('loginError'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <div class="d-flex flex-column align-items-center text-center">
                    {{-- <img class="img-circle elevation-2" alt="User Image" width="60"
                        src="{{ asset('Gambar/sba.png') }}"> --}}
                    <p class="login-box-msg">
                    <h3>Sign in</h3>
                    </p>
                </div>

                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <label for="username">Username</label>
                    <div class="input-group mb-3">
                        <input type="username" name="username" id="username" placeholder=" Maukan username Anda "
                            class="form-control @error('username') is-invalid @enderror" autofocus required
                            value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        </div>
                    @enderror

                    <div class="input-group-append">
                        <div class="input-group-text"> </div>
                    </div>
            </div>
            <label for="password">Password</label>
            <div class="input-group mb-3">
                <input type="password" id="password" name="password" placeholder="Masukan Password Anda"
                    class="form-control @error('password') is-invalid @enderror" required
                    value="{{ old('password') }}">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                </div>
            @enderror
            <div class="input-group-append">
                <div class="input-group-text"></div>
            </div>
        </div>

        <br>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>

        </div>

    </div>
    </form>



    <!-- /.login-card-body -->
    </div>
    </div>
    <!-- /.login-box -->

</body>

</html>
