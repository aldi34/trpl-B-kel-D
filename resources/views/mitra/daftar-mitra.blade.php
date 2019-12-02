@extends('/include/index')
@section('title')
Daftar Mitra
@endsection

@section('link')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
   <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>


   <style type="text/css">
       #mapid {height: 600px; }
   </style>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
   <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

   <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
@stop

@section('content')
	<div class="text" style="margin-top: 150px; width: 100%; height: 80px;">
	
	<h1 style="width: 50%; text-align: center; margin-left: 25%">Isi Formulir Dibawah Ini</h1>
	
</div>
<div class="container">
	<form action="/mitra" method="POST" class="needs-validation" novalidate>
    {{csrf_field()}}
  <div class="form-group">
    <label for="namalengkap">Nama Mitra</label>
    <input type="text" class="form-control" id="namamitra" name="namamitra" placeholder="Masukkan Nama Mitra">
  </div>
  <div class="form-group">
    <label for="namalengkap">Nama Pemilik</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pemilik">
  </div>
  <div class="form-group">
    <label for="ktp">Nomer KTP</label>
    <input type="number" class="form-control" id="ktp" name="ktp" placeholder="Masukkan Nomer KTP">
  </div>
  
  <div class="row" style="margin-bottom: 15px;">
    <div class="col">
    	<label for="tempatlahir">Jenis Kendaraan</label>
      <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Masukkan Jenis Kendaraan">
    </div>
    <div class="col">
    	<label for="ktp">Jumlah Kendaraan</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Kendaraan">
    </div>
  </div>

<div class="row" style="margin-bottom: 15px;">
    <div class="col">
      <label for="telp">Nomer Telepon</label>
    <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukkan Nomer KTP">
    </div>
    <div class="col">
      <label for="email">Alamat Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email">
    </div>
  </div>

  <div class="row" style="margin-bottom: 15px;">
    <div class="col">
      <label for="telp">Password</label>
    <input type="password" class="form-control" id="telp" name="password1" placeholder="Masukkan Password">
    </div>
    <div class="col">
      <label for="email">Ulangi Password</label>
    <input type="password" class="form-control" id="email" name="password2" placeholder="Masukkan Ulang Password">
    </div>
  </div>

  <div class="row justify-content-center" style="margin-top: 30px; margin-bottom: 50px;">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">Pilih Lokasi Anda</div>
            
                <div class="card-body">
                    
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="latitude" class="control-label">Lattitude</label>
                                <input id="latitude" name="latitude" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{ old('latitude', request('latitude')) }}" required>
                                {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="longitude" class="control-label">Longitude</label>
                                <input id="longitude" name="longitude" type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{ old('longitude', request('longitude')) }}" required>
                                {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
                            </div>
                        </div>
                    </div>
                    <div id="mapid"></div>
                </div>

            
        </div>
    </div>
</div>



  <input value="Selesai" name="" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">
  
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Berhasil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body">
             Permintaan Anda Sedang Diproses, Tunggu Email Atau Pesan Di Nomer Telepon Anda
            </div>
            <div class="modal-footer">
              <input type="submit" name="" class="btn btn-secondary" value="Tutup">
              
            </div>
          </div>
        </div>
      </div>
  
  
</form>
</div>

<script>
    var mapCenter = [{{ request('latitude', config('leaflet.map_center_latitude')) }}, {{ request('longitude', config('leaflet.map_center_longitude')) }}];
    var map = L.map('mapid').setView(mapCenter, {{ config('leaflet.zoom_level') }});

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker(mapCenter).addTo(map);
    function updateMarker(lat, lng) {
        marker
        .setLatLng([lat, lng])
        .bindPopup("Lokasi Anda")
        .openPopup();
        return false;
    };

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
    });

    var updateMarkerByInputs = function() {
        return updateMarker( $('#latitude').val() , $('#longitude').val());
    }
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);


     </script>
@stop