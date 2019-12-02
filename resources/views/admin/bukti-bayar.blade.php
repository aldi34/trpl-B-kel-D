@extends('admin.layouts.template')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Transaksi</h1>
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
    <th scope="col">Email</th>
    <th scope="col">Jadwal Keberangkatan</th>
    <th scope="col">Jumlah Tiket</th>
    <th scope="col">#</th>
    
  </thead>
  <tbody>
  	@php
  	$i = 1;
  	@endphp
  	@foreach($bayar as $s)
  	<tr>
  		<td>{{$i++}}</td>
  		<td>{{$s->pengunjung->nama_lengkap}}</td>
  		<td>{{$s->pengunjung->no_telp}}</td>
  		<td>{{$s->pengunjung->email}}</td>
  		<td>{{date("Y-m-d", strtotime($s->tanggal))}}, {{$s->jam}}.00 AM</td>
  		<td>{{$s->jumlah_tiket}}</td>
      <td><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detail{{$s->id}}">Detail</button></td>
  		<!-- MODAL -->
<div class="modal fade" id="detail{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Total Pembayaran : @currency($s->total_harga)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="foto_pembayaran/{{$s->bukti_bayar}}" style="width: 100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <form action="{{url('/verif-bukti-sekarang')}}" method="post">
          @csrf
          <input type="hidden" name="idnya" value="{{$s->id}}">
          <input type="hidden" name="emailnya" value="{{$s->pengunjung->user->email}}">
          <button type="submit" class="btn btn-sm btn-primary">Verifikasi</button>
        </form>
        <form action="{{url('/jangan-verif-bukti-sekarang')}}" method="post">
          @csrf
          <input type="hidden" name="idnya" value="{{$s->id}}">
          <button type="submit" class="btn btn-sm btn-danger">tolak</button>
        </form>
      </div>
    </div>
  </div>
</div>
  	   <!-- END MODAL -->
    </tr>
  	@endforeach
  	
  </tbody>
	  
</table>
</div>
</div>
</div>
@stop