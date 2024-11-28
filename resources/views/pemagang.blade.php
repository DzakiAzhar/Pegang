<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Magang</title>

    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body>

    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/pemprov.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Magang DISTANBUN</span>
    </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('welcome')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Halaman Utama</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Pendaftaran Magang</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form action="{{route('pemagang.post')}}" method="POST">
            @csrf
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Silahkan isi form dibawah ini</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="InputNama">Nama</label>
                    <input type="text" name="name" class="form-control" id="InputNama" placeholder="masukkan nama anda">
                    @error('name')
                        <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputNim">NIM/NIS</label>
                    <input type="number" name="nim" class="form-control" id="InputNim" placeholder="masukkan NIM/NIS anda">
                    @error('nim')
                        <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputJurusan">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="InputJurusan" placeholder="masukkan jurusan anda">
                    @error('jurusan')
                        <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputInstansi">Instansi</label>
                    <input type="text" name="instansi" class="form-control" id="InputInstansi" placeholder="masukkan asal instansi">
                    @error('instansi')
                        <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputEmail">email</label>
                    <input type="email" name="email" class="form-control" id="InputEmail" placeholder="masukkan E-mail anda">
                    @error('email')
                        <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputLamaMagang">Lama magang</label>
                    <input type="text" name="lama_magang" class="form-control" id="InputLamaMagang" placeholder="masukkan berapa bulan magang anda">
                    @error('lama_magang')
                        <small>{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="InputProposal">Proposal</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="proposal" class="custom-file-input" id="InputProposal">
                        @error('proposal')
                        <small>{{$message}}</small>
                        @enderror
                        <label class="custom-file-label" for="InputProposal">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        </form>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
          </form>
    </div>
</body>
</html>



