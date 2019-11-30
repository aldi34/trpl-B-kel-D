@extends('admin.layouts.template')

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
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Wisata</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wisata</li>
            </ol>
          </div>
        </div>
      </div>

<form action="/tambahWisata" method="POST"  class="needs-validation" novalidate style="margin-top: 40px; margin-left: 25%;">
  {{csrf_field()}}
  <div class="form-row">
    <div class="col-md-8 mb-3">
      <label for="namadest">Nama Destinasi</label>
      <input type="text" class="form-control" id="namadest" name="namadest" placeholder="Nama Destinasi" value="" required>
      <div class="valid-tooltip">
        Looks good!
      </div>
    </div>
  </div>

    <div class="form-row" style="margin-top: 10px;">
      <div class="col-md-8 mb-3">
    <select class="custom-select custom-select-lg mb-3" name="wisata" id="wisata" style="height: 40px; font-size: 15px;" required >
      <option value="0" selected="true" disabled="true">Pilih wisata</option>
      <option value="Pantai">Pantai</option>
      <option value="Gunung">Gunung</option>
      <option value="Taman">Taman</option>
      <option value="Air Terjun">Air Terjun</option>
    </select>
    <div class="invalid-feedback">Example invalid custom select feedback</div>
  </div>
</div>

  <div class="form-row">
    <div class="col-md-8 mb-3">
      <select id="provinsi" name="provinsi" class="custom-select custom-select-lg mb-3" style="height: 40px; font-size: 15px;">
            <option value="0" selected="true" disabled="true">Pilih Provinsi</option>
             @foreach($provinsinya as $p)
               <option value="{{$p->id}}" >{{$p->nama_provinsi}}</option>
             @endforeach
        </select>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-8 mb-3">
      <select id="kota" name="kota" class="custom-select custom-select-lg mb-3" style="height: 40px; font-size: 15px;">
      <option value="0" selected="true" disabled="true">Pilih Provinsi Terlebih Dahulu</option>
    </select>
    </div>
  </div>


<div class="form-row">
    <div class="col-md-8 mb-3">
      <label for="harga">Harga</label>
      <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Tiket Masuk" required>
      <div class="invalid-tooltip">
        Please provide a valid zip.
      </div>
    </div>
  </div>

<div class="form-row">
  <div class="col-md-8 mb-3">
  <div class="custom-file" style="margin-top: 10px;">
    <input type="file" class="custom-file-input" id="pict" name="pict" required>
    <label class="custom-file-label" for="pict">Pilih Gambar...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
</div>
</div>

<div class="form row" style="margin-top: 30px; margin-bottom: 20px;">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Pilih Lokasi Destinasi</div>
            
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
<div class="col-md-8 mb-3">
<button class="btn btn-outline-secondary btn-lg btn-block" type="submit">Tambahkan Data</button>
</div>
</form>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript">
    $('#provinsi').on('change', function(e){
            console.log(e);
            var id_provinsi = e.target.value;
            $.get('/json-kota?provinsi_id=' + id_provinsi, function(data){
                $('#kota').empty();
                $('#kota').append('<option value="0" selected="true" disabled="true">Pilih Kota Anda</option>')
                $.each(data, function(index, kotaObj){
                    $('#kota').append('<option value="'+kotaObj.id +'">'+ kotaObj.nama_kota +'</option>')
                })
            });
        }); 
    </script>

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
        .bindPopup("Lokasi Destinasi")
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
@endsection
