@extends('/include/index')
@section('title')
Beranda
@endsection

@section('content')
<section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="{{asset('home/img/earth-pictures.png')}}" alt="" class="img-fluid" style="margin-top: -50px; margin-left: 80px; width: 300px; height: 300px;">
      </div>

<form action="/pilihLokasi" method="GET">
      <div class="intro-info">
        <h2>Trip Wisata<br><span>Indonesia</span><br>1 Day Trip!</h2>
        <div>
          <button class="btn-get-started scrollto">Mulai</button>
          
          <a href="mitra" class="btn-services scrollto">Daftar Mitra</a>
        </div>
      </div>
      </form>

    </div>
  </section><!-- #intro -->
@endsection