@extends('user.layouts.template')
@section('title')
Rekomendasi
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
       #mapid {height: 300px; }
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
  <section class="jumbotron text-center" >
        <div class="container">
          <h1 class="jumbotron-heading">Rekomendasi Wisata</h1>
          <p class="lead text-muted">Berikut Beberapa Paket Yang Tersedia Untuk Anda. Silahkan Pilih Paket Yang Sesuai Dengan Keinginan Anda</p>
        </div>
  </section>
<!-- TUTUP -->
<div class="container">

@if(session('sukses'))
<div class="alert alert-success" >
{{session('sukses')}}
</div>
@endif
@if(session('gagal'))
<div class="alert alert-danger" >
{{session('gagal')}}
</div>
@endif

@foreach($dp as $p)
<div class="card text-center border-dark mb-8 " style="margin-bottom: 50px;">
  <div class="card-header bg-transparent border-dark">{{$p->nama_paket}} : @currency($p->harga) </div>
  <div class="card-body text-dark">
    <div class="card-group">
      <!-- ROW -->



  @foreach($p->paket as $sh)
  <div class="card" >
    <img class="card-img-top" src="{{url('/fotoDestinasi/'.$sh->destinasi->gambar)}}" alt="Card image cap" class="img" style="width: 100%; height: 200px;">
    <div class="card-body">
      <p class="card-text"></p>
      <h1 class="card-text" style="font-size: 20px;">{{$sh->destinasi->nama_destinasi}}</h1>
      <p class="card-text">{{$sh->destinasi->nama_kota}}, {{$sh->destinasi->nama_provinsi}}</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Detail</button> -->
         <a href="{{url('detail-wisata')}}/{{$sh->destinasi->id}}" class="btn btn-sm btn-outline-secondary">Detail</a>
        </div>
        <small class="text-muted">{{$sh->destinasi->tipe_destinasi}}</small>
      </div>
    </div>
  </div>
  @endforeach  



</div>
  </div>  
  <div class="card-footer text-muted bg-transparent border-dark">
   <button type="button" class="btn btn-outline-dark col-md-5" data-toggle="modal" data-target="#modal{{$p->id}}">Beli Paket</button>
  </div>

</div>

<!-- MODAL  -->
 <div class="modal fade" id="modal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi Formulir Dibawah Ini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{url('pesan-travel-sekarang')}}" method="post">
          @csrf
          <input type="hidden" name="harga_paket" value="{{$p->harga}}">
          <input type="hidden" name="id_paket" value="{{$p->id}}">
      <div class="modal-body">
        <label for="" class="col-form-label">Jadwal Keberangkatan</label>
          <div class="form-row">
            <div class="col-md-3">
              <div class="rs-select2 js-select-simple select--no-search">
            <select name="jam">
                <option disabled="disabled" selected="selected">Jam</option>
                <option value="7">7 AM</option>
                <option value="8">8 AM</option>
                <option value="9">9 AM</option>
            </select>
            <div class="select-dropdown"></div>
        </div>
              <!-- <input type="text" class="form-control" placeholder="First name"> -->
            </div>
            <div class="col">
              <input class="form-control" type="date" placeholder="Pilih Tanggal" name="tanggal"><i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
            </div>
          </div>
        
          <div class="form-group" style="margin-top: 20px">
              <label for="message-text" class="col-form-label">Masukkan Jumlah Tiket :</label>
            <div class="col-6">
              <div class="input-group">
                  <input min="1" class="input--style-2" type="number" placeholder="Input Disini" name="jumlah_tiket" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Bekal :</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="bekal" id="exampleRadios1" value="0" checked>
              <label class="form-check-label" for="exampleRadios1">
                Bawa Sendiri
              </label>
              </div>
              <div class="form-check">
              <input class="form-check-input" type="radio" name="bekal" id="exampleRadios2" value="10000">
              <label class="form-check-label" for="exampleRadios2">
                Disediakan Pihak Travel
              </label>
              </div>
          </div>

          <div class="form-group" style="margin-top: 20px">
              <label for="message-text" class="col-form-label">Masukkan Lokasi Anda</label>
            <div class="col-12">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
      </div>
    </div>
  </form>
  </div>
</div>
















@endforeach

{{$dp->links()}}
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
   
    
@endsection

