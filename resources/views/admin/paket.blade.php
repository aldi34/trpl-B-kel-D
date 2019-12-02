@extends('admin.layouts.template')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
  	
  	<a href="/tambah-paket" class="btn btn-primary">Tambah Paket</a>
@foreach($dp as $p)
<div class="card border-dark mb-8">
  <div class="card-header bg-transparent border-dark">{{$p->nama_paket}} : Kategori Pantai </div>
  <div class="card-body text-dark">
    <div class="card-group">
      <!-- ROW -->



  @foreach($p->paket as $sh)
  <div class="card ">
    <img class="card-img-top" src="{{url('/fotoDestinasi/'.$sh->destinasi->gambar)}}" alt="Card image cap" class="img" style="width: 318px; height: 200px;">
    <div class="card-body">
      <p class="card-text"></p>
      <h1 class="card-text" style="font-size: 20px;">{{$sh->destinasi->nama_destinasi}}</h1>
      <p class="card-text">{{$sh->destinasi->nama_kota}}, {{$sh->destinasi->nama_provinsi}}</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
         
        </div>
        <small class="text-muted">{{$sh->destinasi->tipe_destinasi}}</small>
      </div>
    </div>
  </div>
  @endforeach  



</div>
  </div>  
</div>
@endforeach

{{$dp->links()}}
</div>
</div>
@stop