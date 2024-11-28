@extends('absensi.masterabsensi')
@section('content2')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absensi</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <form action="" method="">
          @csrf
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">pastikan wajah anda terlihat di kamera</h3>
            </div>
            <!-- /.card-header -->

            <style>
                #picture,
                #picture video{
                    display: inline-block;
                    width: 100%;
                    margin-top: 10px;
                    margin-right: 10px;
                    height: auto !important;
                    border-radius: 15px;

                }

                #map {
                    height: 250px;
                    margin-left: 10px;
                    margin-right: 10px;
                    border-radius: 15px;
                }
            </style>

            <div class="row" style="margin-left: 10px">
                <div class="col">
                    <input type="hidden" id="lokasi">
                    <div id="picture"></div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col">
                    <div id="map"></div>
                </div>
            </div>

            <!-- form start -->
            <form>
              <div class="card-footer">
                <button id="takeabsen" type="submit" class="btn btn-primary">Absen sekarang</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      </form>

    </div>
  </section>
  </div>



@endsection

@push('myscript')
    <script>
        Webcam.set({
            height:480,
            width:640,
            image_format:'jpeg',
            jpeg_quality: 80
        });

        Webcam.attach('picture');

        var lokasi = document.getElementById('lokasi');
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
        }

        function successCallback(position){
            lokasi.value = position.coords.latitude +","+ position.coords.longitude;

            var map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 18);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
             maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);

            var circle = L.circle([position.coords.latitude, position.coords.longitude], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 20
                }).addTo(map)
        }

        function errorCallback(){

        }

        $(takeabsen).click(function(e) {
          Webcam.snap(function(uri){
            image = uri;
          });
          var lokasi = $("#lokasi").val();

          $.ajax({
            type: 'POST',
            url: '/absensi/store',
            data: {
                _token:"{{ csrf_token() }}",
                image: image,
                lokasi : lokasi
            },
            cache: false,
            success: function(respond) {
                if(respond == 0){
                    alert('success');
                }else{
                    alert('error');
                }
            }
          });

        });
    </script>
@endpush
