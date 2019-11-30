@extends('/include/index')
@section('title')
Rekomendasi
@endsection

@section('content')

<section class="jumbotron text-center" style="margin-top: 50px;">
        <div class="container">
          <h1 class="jumbotron-heading">Rekomendasi Wisata</h1>
          <p class="lead text-muted">Berikut beberapa tempat wisata yang kami rekomendasikan kepada anda. Silahkan pilih paket wisata yang anda ingin kunjungi.</p>
        </div>
      </section>
<div class="container" style="margin-bottom: 50px;">

<form action="/paket">
<div class="card border-dark mb-8">
  <div class="card-header bg-transparent border-dark">Rekomendasi Paket 1 : Kategori Pantai</div>
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
  <div class="card-footer bg-transparent border-dark"><input type="submit" value="Pilih Paket" class="btn btn-primary"></div>
</div>


</div>

<div class="container" style="margin-bottom: 50px;">

<div class="card border-dark mb-8">
  <div class="card-header bg-transparent border-dark">Rekomendasi Paket 2 : Kategori Gunung Argopuro</div>
  <div class="card-body text-dark">
    <div class="card-group">
  <div class="card ">
    <img src="{{asset('fotoDestinasi/argopuro.jpg')}}" class="card-img-top" style="height: 220px">
    <div class="card-body">
      <h5 class="card-title">Argopuro</h5>
      
    </div>
    <div class="card-footer border-dark">
      <small class="text-muted">Gunung</small>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('fotoDestinasi/tancak.jpg')}}" class="card-img-top" style="height: 220px" >
    <div class="card-body">
      <h5 class="card-title">Tancak</h5>
      
    </div>
    <div class="card-footer border-dark">
      <small class="text-muted">Air Terjun</small>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('fotoDestinasi/rengganis.jpg')}}" class="card-img-top" style="height: 220px">
    <div class="card-body">
      <h5 class="card-title">Rengganis</h5>
      
    </div>
    <div class="card-footer border-dark">
      <small class="text-muted">Air Terjun</small>
    </div>
  </div>
</div>
  </div>
  <div class="card-footer bg-transparent border-dark"><input type="submit" value="Pilih Paket" class="btn btn-primary"></div>
</div>
</form>


</div>
@endsection
