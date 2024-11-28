@extends('logbook.masterlogbook')
@section('content2')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Log Book</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


  <div class="row">
  <div class="col-md-8">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Silahkan isi form kegiatan dibawah</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{route('logbook.post')}}" method="POST">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="exampleNim">NIM/NIS</label>
            <input type="number" class="form-control" name="nim" id="exampleNim" placeholder="NIM/NIS">
            @error('nim')
            <small>{{$message}}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleTanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="exampleTanggal" placeholder="tanggal">
            @error('tanggal')
            <small>{{$message}}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleKegiatan">Kegiatan</label>
            <input type="text" class="form-control" name="kegiatan" id="exampleKegiatan" placeholder="kegiatan">
            @error('kegiatan')
            <small>{{$message}}</small>
            @enderror
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        </div>

        <!-- /.card-body -->


    </div>
  </div>
</div>

    <!-- /.card -->
  </div>
</div>
</div>

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
