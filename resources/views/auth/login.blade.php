<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

<form action='{{route('login.post')}}' method="POST" class='ms-auto me-auto mt-3' style="width: 500px">
            @csrf
            <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<body class="hold-transition login-page">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1">Magang DISTANBUN</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Silahkan masukkan email dan password anda</p>

      <form action="" method="">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
            <small>{{$message}}</small>
        @enderror
        <div class="input-group mb-3">
          <input type="password" name='password' class="form-control" placeholder="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
            <small>{{$message}}</small>
        @enderror
        <div class="row">

          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</form>

</body>
</html>



