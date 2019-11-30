@extends('/include/index')
@section('title')
Rekomendasi
@endsection

@section('link')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
@endsection

@section('content')
<div class="container">
<div class="text" style="margin-top: 80px; width: 100%; height: 80px;">
	<h1 style="width: 50%; text-align: center; margin-left: 25%">Pilihan Wisata Anda</h1>
</div>
			<div class="row" style=" margin-top: 50px; margin-left: 10px;">
			@foreach($tujuan as $t)

				<div class="col-md-4">
	              <div class="card mb-4 box-shadow">
	                <img class="card-img-top" src="{{url('/fotoDestinasi/'.$t->gambar)}}" alt="Card image cap" class="img" style="width: 340px; height: 200px;">
	                <div class="card-body">
	                  <p class="card-text">@currency($t->harga)/Orang</p>
	                  <h1 class="card-text" style="font-size: 20px;">{{$t->nama_destinasi}}</h1>
	                  <p class="card-text">{{$t->nama_kota}}, {{$t->nama_provinsi}}</p>
	                  <div class="d-flex justify-content-between align-items-center">
	                  	<div class="btn-group">
	                  		<a href="/detail-lokasi/{{$t->destinasi_id}}" class="btn btn-sm btn-outline-secondary">Lihat Map</a>
	                      
	                      
	                    </div>
	                    <small class="text-muted">{{$t->tipe_destinasi}}</small>
	                  </div>
	                </div>
	           
	              </div>
	            </div>
	            

	            
			@endforeach

			</div>
			<div class="container">
				
				<a href="form" class="btn btn-outline-success btn-lg btn-block">Selesai (Proses Wisata)</a>

				<a href="tracking" class="btn btn-outline-success btn-lg btn-block">Lihat Tracking / Jalur</a>		
			</div>

			<!-- Modal -->
			<!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Pemberitahuan</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true"></span>
			        </button>
			      </div>
			      <div class="modal-body">
			       Apakah Anda Akan Menjadikannya 1 Paket Wisata ?
			      </div>
			      <div class="modal-footer">

			        <button style="margin-right: 280px;" type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
			      	<a href="" class="btn btn-secondary">Tidak</a>
			        <a href="" class="btn btn-primary">Iya</a>
			      </div>
			    </div>
			  </div>
			</div> -->
</div>
@stop
