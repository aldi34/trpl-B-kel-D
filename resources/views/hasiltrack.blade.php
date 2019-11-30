@extends('/include/index')
@section('title')
Tracking
@endsection

@section('content')
<div class="container-fluid" style="border: 0.6px solid #888">

<div class="text" style="margin-top: 80px; width: 100%; height: 80px;">
	
	<h1 style="width: 50%; text-align: center; margin-left: 25%">Tracking</h1>
	
</div>

<div class="container">
  <div class="row" style="margin-top: 20px;padding-top: 10px; height: 60px; border-bottom: 0.4px solid #888; border-top: 10px solid #444;">
  <div class="col-8"><i class="fa fa-map-marker" aria-hidden="true"></i>  {{$kec->nama_kecamatan}}, {{$kot->nama_kota}}</div>
  
</div>
  <div class="row" style="margin-top: 10px;">
  <div class="col-8"><!-- Example single danger button -->
<div class="btn-group">Urutkan Dari &nbsp&nbsp
  <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-top: -5px;">
    Default
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Terdekat</a>
    <a class="dropdown-item" href="#">Terjauh</a>
  </div>
</div></div>
  <div class="col-4" >
    <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
  </form></div>
</div>

  <table class="table table-hover" style="margin-top: 20px;">
  <thead class="thead-dark">
      <th scope="col">No</th>
      <th scope="col">Nama Destinasi</th>
      <th scope="col">Jenis Destinasi</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Kota</th>
      <th scope="col">Harga</th>
      <th scope="col">Jarak</th>
  </thead>
  <tbody>
  	@php
  	$i = 1;
  	@endphp
  	@foreach($data as $d)
  	<tr>
  		<td>{{$i++}}</td>
  		<td>{{$d->nama_destinasi}}</td>
  		<td>{{$d->tipe_destinasi}}</td>
  		<td>{{$d->nama_provinsi}}</td>
  		<td>{{$d->nama_kota}}</td>
  		<td>@currency($d->harga)/orang</td>
  		<td>{{$distance}} KM</td>
  	</tr>
  	@endforeach
  </tbody>
	  <tfoot>
		<tr>
		<th>Total :</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th>@currency($h)</th>
		</tr>	
	</tfoot>
</table>
</div>
</div>
			

@stop