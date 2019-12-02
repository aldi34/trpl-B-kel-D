@extends('mitra.layouts.template')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pencari Travel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
            </ol>
          </div>
        </div>
      </div>
  
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
<div class="col-md-12 mb-3">
  <table class="table table-hover" style="margin-top: 20px;">
  <thead class="thead" style="background-color: #343a40; color: #ffffff" align="center">
    <th scope="col">No</th>
    <th scope="col">Nama Lengkap</th>
    <th scope="col">No.Telp</th>
    <th scope="col">Paket</th>
    <th scope="col">Jadwal Keberangkatan</th>
    <th scope="col">Jumlah Tiket</th>
    <th scope="col">Lokasi</th>
    <th scope="col">#</th>
    
  </thead>
  <tbody>
  	@php
  	$i = 1;
  	@endphp
  	@foreach($pesanan as $s)
  	<tr>
  		<td>{{$i++}}</td>
  		<td>{{$s->pengunjung->nama_lengkap}}</td>
  		<td>{{$s->pengunjung->no_telp}}</td>
  		<td>{{$s->paket->detailPaket->nama_paket}}</td>
  		<td>{{date("Y-m-d", strtotime($s->tanggal))}}, {{$s->jam}}.00 AM</td>
  		<td>{{$s->jumlah_tiket}}</td>
      <td>
        <a href="{{url('detail-penjemputan')}}/{{$s->id}}" class="btn btn-sm btn-primary">Detail</a>
      </td>
      <td>
        <form action="{{url('ambil-pesanan')}}" method="post">
          @csrf
          <button class="btn btn-sm btn-primary">
            Terima
          </button>
        </form>
      </td>
    </tr>
  	@endforeach
  	
  </tbody>
	  
</table>
</div>
</div>
</div>
@stop