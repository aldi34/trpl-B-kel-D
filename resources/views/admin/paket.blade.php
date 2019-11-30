@extends('admin.layouts.template')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
  	<div class="card-footer bg-transparent border-dark"><input type="submit" value="Pilih Paket" class="btn btn-primary"></div>
<div class="card border-dark mb-8">
  <div class="card-header bg-transparent border-dark">Rekomendasi Paket 1 : Kategori Pantai </div>
  <div class="card-body text-dark">
    <div class="card-group">
  <div class="card ">
    <img src="{{asset('fotoDestinasi/payangan.jpg')}}" class="card-img-top" style="height: 220px">
    <div class="card-body">
      <h5
       class="card-title">Payangan</h5>
      
    </div>
    <div class="card-footer border-dark">
      <small class="text-muted">Pantai</small>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('fotoDestinasi/love.jpg')}}" class="card-img-top" style="height: 220px">
    <div class="card-body">
      <h5 class="card-title">Teluk Love</h5>
      
    </div>
    <div class="card-footer border-dark">
      <small class="text-muted">Pantai</small>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('fotoDestinasi/papuma.jpg')}}" class="card-img-top" style="height: 220px">
    <div class="card-body">
      <h5 class="card-title">Papuma</h5>
      
    </div>
    <div class="card-footer border-dark">
      <small class="text-muted">Pantai</small>
    </div>
  </div>
</div>
  </div>
  
</div>
</div>
</div>
@stop