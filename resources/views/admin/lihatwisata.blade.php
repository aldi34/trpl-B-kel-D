@extends('admin.layouts.template')

@section('content')

<div class="content-wrapper">
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Wisata</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Wisata</li>
            </ol>
          </div>
        </div>
      </div>




    <div class="album py-5 bg-light">
 
        <div class="container">
        	<div class="row">
			@foreach($show as $sh)
		
	            <div class="col-md-4">
	              <div class="card mb-4 box-shadow">
	                <img class="card-img-top" src="{{url('/fotoDestinasi/'.$sh->gambar)}}" alt="Card image cap" class="img" style="width: 318px; height: 200px;">
	                <div class="card-body">
	                  <p class="card-text">@currency($sh->harga)/Orang</p>
	                  <h1 class="card-text" style="font-size: 20px;">{{$sh->nama_destinasi}}</h1>
	                  <p class="card-text">{{$sh->nama_kota}}, {{$sh->nama_provinsi}}</p>
	                  <div class="d-flex justify-content-between align-items-center">
	                    <div class="btn-group">
	                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
	                     
	                    </div>
	                    <small class="text-muted">{{$sh->tipe_destinasi}}</small>
	                  </div>
	                </div>
	              </div>
	            </div>

			@endforeach
		</div>
		<a href="tambah-wisata" class="btn btn-outline-secondary btn-lg btn-block">Tambah Wisata</a>
		
		</div>
		</div>
</div>
		</div>


@stop