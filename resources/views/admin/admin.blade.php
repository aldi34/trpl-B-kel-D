@extends('admin.index')

@section('content')
<div class="container" style="margin-top: 30px;">
  <div class="row">
    <div class="col-md-2 offset-md-1.4">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/download.png')}}" class="card-img-top" alt="" style="width: 100px; height: 100px; margin-left: 30%; margin-top: 10px">
        <div class="card-body">
          <h5 class="card-title">Wisata</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="lihatwisata" class="btn btn-primary">Lihat Data</a>
          </div>
        </div>
    </div>
    <div class="col-md-2 offset-md-2">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/pelanggan.png')}}" class="card-img-top" alt="" style="width: 100px; height: 100px; margin-left: 30%; margin-top: 10px">
        <div class="card-body">
          <h5 class="card-title">Pelanggan</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="" class="btn btn-primary">Lihat Data</a>
          </div>
        </div>
    </div>
    <div class="col-md-2 offset-md-2">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('images/icon-5.png')}}" class="card-img-top" alt="" style="width: 100px; height: 100px; margin-left: 30%; margin-top: 10px">
        <div class="card-body">
          <h5 class="card-title">Mitra</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Lihat Data</a>
          </div>
        </div>
    </div>

  </div>
</div>
@endsection