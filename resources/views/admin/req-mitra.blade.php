@extends('admin.layouts.template')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Permintaan Mitra</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mitra</li>
            </ol>
          </div>
        </div>
      </div>
  
  
<div class="col-md-10 mb-3" style="left: 10%">
  <table class="table table-hover" style="margin-top: 20px;">
  <thead class="thead" style="background-color: #343a40; color: #ffffff" align="center">
    <th scope="col">No</th>
    <th scope="col">Nama Mitra</th>
    <th scope="col">Jenis Kendaraan</th>
    <th scope="col">Jumlah Kendaraan</th>
    <th scope="col">No.Telp</th>
    <th scope="col">Aksi</th>
  </thead>
  <tbody>
  	@php
  	$i = 1;
  	@endphp
  	@foreach($show as $s)
  	<tr>
  		<td>{{$i++}}</td>
  		<td>{{$s->nama_mitra}}</td>
      <td>{{$s->jenis_kendaraan}}</td>
      <td>{{$s->jumlah_kendaraan}}</td>
  		<td>{{$s->no_telp}}</td>
  		<td>
        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="modal" data-target="#modal{{$s->id}}"><i class="fas fa-eye"></i></button>


<div class="modal fade" id="modal{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verifikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Nama : <strong>{{$s->nama_mitra}}</strong></p>
        <p>Nama Pemilik : <strong>{{$s->nama_pemilik}}</strong></p>
        <p>Jenis Kelamin : <strong>{{$s->jenis_kelamin}}</strong></p>
        <p>No KTP : <strong>{{$s->nomer_ktp}}</strong></p>
        <p>Email : <strong>{{$s->user->email}}</strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm float-left" data-dismiss="modal">Close</button>
        <form action="/verif-mitra" method="POST">
          @csrf
        <input type="hidden" value="{{$s->id}}" name="id_mitra">
        <button type="submit" class="btn btn-primary btn-sm float-right">Verifikasi</button>
        </form>
        <button type="button" class="btn btn-primary btn-sm float-right">Tolak</button>
      </div>
    </div>
  </div>
</div>


      </td>
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

{{$show->links()}}
</div>
</div>
</div>
@stop