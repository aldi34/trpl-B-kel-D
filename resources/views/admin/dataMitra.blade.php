@extends('admin.layouts.template')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Mitra</h1>
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
    <th scope="col">Status</th>
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
      <td>Aktif</td>
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