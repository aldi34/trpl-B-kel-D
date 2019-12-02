@extends('user.layouts.template')
@section('title')
Rekomendasi
@endsection

@section('content')
<section class="jumbotron text-center" >
        <div class="container">
          <h1 class="jumbotron-heading">Detail Wisata</h1>
          <p class="lead text-muted">Berikut Detail Wisata Dari Paket Yang Anda Pilih</p>
        </div>
  </section>


<div class="container">
<div class="card">
  <img src="{{url('/fotoDestinasi/'.$destinasi->gambar)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$destinasi->nama_destinasi}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  
  <div class="card-body">
    <a href="#" class="card-link">Lihat Rute Dari Lokasi Saya</a>

  </div>
</div>
</div>
@stop