@extends('dashboard.masterlte')
@section('content2')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Dinas Pertanian Dan Perkebunan Provinsi Jawa Tengah</h5>

                <p class="card-text">
                    Dinas Petanian Dan Perkebunan Provinsi Jawa Tengah berada di Komplek Tarubudaya, Jalan Jenderal Gatot Subroto, Bandarjo, Ungaran Barat, Kabupaten Semarang, Jawa Tengah 50517
                </p>

                <a href="https://maps.app.goo.gl/kHctXMuhJSRxYaau7" class="card-link">Open in maps</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Visi & Misi</h5>

                <p class="card-text">
                  "Mboten Korupsi, Mboten Ngapusi"
                  “Memperkuat kapasitas ekonomi rakyat dan memperluas lapangan kerja untuk mengurangi kemiskinan pengangguran.”
                </p>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Absensi</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Sudah Absen kah anda hari ini?</h6>

                <p class="card-text">Jika belum klik tomnbol absen</p>
                <a href="{{route('absensi')}}" class="btn btn-primary">Absen</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Log Book</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Jangan lupa untuk merekap kegiatan magang</h6>

                <p class="card-text">Rekap kegiatan magang anda hari ini, klik tombol Rekap</p>
                <a href="{{route('logbook.post')}}" class="btn btn-primary">Rekap</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
@endsection
