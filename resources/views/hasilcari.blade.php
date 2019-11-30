@extends('/include/index')
@section('title')
Rekomendasi
@endsection

@section('content')

<section class="jumbotron text-center" style="margin-top: 50px;">
        <div class="container">
          <h1 class="jumbotron-heading">Rekomendasi Wisata</h1>
          <p class="lead text-muted">Berikut beberapa tempat wisata yang kami rekomendasikan kepada anda. Silahkan pilih wisata yang anda ingin kunjungi.</p>
        </div>
      </section>

<div class="album py-5 bg-light">
    <form action="/tambah-tujuan" method="POST">
	{{csrf_field()}}
        <div class="container">
        	<div class="row">
			@foreach($hasilcari as $hc)
		
	            <div class="col-md-4">
	              <div class="card mb-4 box-shadow">
	                <img class="card-img-top" src="{{url('/fotoDestinasi/'.$hc->gambar)}}" alt="Card image cap" class="img" style="width: 350px; height: 200px;">
	                <div class="card-body">
	                  <p class="card-text">@currency($hc->harga)/Orang</p>
	                  <h1 class="card-text" style="font-size: 20px;">{{$hc->nama_destinasi}}</h1>
	                  <p class="card-text">{{$hc->nama_kota}}, {{$hc->nama_provinsi}}</p>
	                  <div class="d-flex justify-content-between align-items-center">
	                    <div class="btn-group">
	                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
	                      <input type="checkbox" style="margin-left: 10px; width: 30px; height: 30px;" name="tambahkan[]" id="" value="{{$hc->id_destinasi}}">
	                    </div>
	                    <small class="text-muted">{{$hc->tipe_destinasi}}</small>
	                  </div>
	                </div>
	              </div>
	            </div>

			@endforeach
		</div>
			<input class="btn btn-outline-success btn-lg btn-block" type="{{!empty(Auth::user()->name) ? "submit" : "button"}}" value="Selesai" data-toggle="modal" data-target="{{!empty(Auth::user()->name) ? "" : "#exampleModalCenter"}}" >

			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Pemberitahuan</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true"></span>
			        </button>
			      </div>
			      <div class="modal-body">
			       Untuk dapat melanjutkan, anda harus login terlebih dahulu
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			        <a href="login" class="btn btn-primary">Login</a>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
</form>


</div>

@endsection

