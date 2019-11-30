@extends('admin.layouts.template')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pelanggan</li>
            </ol>
          </div>
        </div>
      </div>
  
  
<div class="col-md-12 mb-3">
  <table class="table table-hover" style="margin-top: 20px;">
  <thead class="thead" style="background-color: #343a40; color: #ffffff" align="center">
    <th scope="col">No</th>
    <th scope="col">Nama Lengkap</th>
    <th scope="col">No.Telp</th>
    <th scope="col">Kota Tinggal</th>
    <th scope="col">Jadwal Keberangkatan</th>
    <th scope="col">Jumlah Tiket</th>
    <th scope="col">Status</th>
    
  </thead>
  <tbody>
  	@php
  	$i = 1;
  	@endphp
  	@foreach($show as $s)
  	<tr>
  		<td>{{$i++}}</td>
  		<td>{{$s->nama_lengkap}}</td>
  		<td>{{$s->no_telp}}</td>
  		<td>{{$s->kota_tinggal}}</td>
  		<td>{{$s->tanggal}}-{{$s->bulan}}-{{$s->tahun}}, {{$s->jam}}.00 AM</td>
  		<td>{{$s->jumlah_tiket}}</td>
      <td>Lunas</td>
  		
  	</tr>
  	@endforeach
  	
  </tbody>
	  <tfoot>
		<tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		</tr>	
	</tfoot>
</table>
</div>
</div>
</div>
@stop