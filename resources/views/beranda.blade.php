@extends('/include/index')
@section('title')
Beranda
@endsection

@section('content')
          <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="box_1620">
              <div class="banner_inner d-flex align-items-center">
          <div class="container">
            <div class="banner_content text-center">
              <h3>Twido <br />1 Day Trip</h3>
              <p>Menyediakan jasa travel dan pembelian paket pisata dalam 1 hari perjalanan yang menyenangkan untuk anda.</p>
              <a class="main_btn" href="login">Mulai Sekarang</a>
            </div>
          </div>
        </div>
            </div>
        </section>
        <!--================Home Blog Area =================-->
        <section class="home_blog_area pad_top">
          <div class="container">
            <div class="home_blog_inner">
              <div class="row h_blog_item">
                <div class="col-lg-6">
              <div class="h_blog_img">
                <img class="img-fluid" style="height: 500px" src="{{asset('flash/img/home-blog/h-blog-1.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6" >
              <div class="h_blog_text" >
                <div class="h_blog_text_inner left">
                  <h4>Pesan paket <br />Wisata</h4>
                  <p>If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.</p>
                  
                </div>
              </div>
            </div>
              </div>
              <div class="row h_blog_item">
            <div class="col-lg-6">
              <div class="h_blog_text">
                <div class="h_blog_text_inner right">
                  <h4>Cek rute <br />Dari lokasi anda</h4>
                  <p>If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.</p>
                 
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="h_blog_img">
                <img class="img-fluid" style="height: 500px" src="{{asset('flash/img/home-blog/h-blog-2.jpg')}}" alt="">
              </div>
            </div>
              </div>
              <div class="row h_blog_item">
                <div class="col-lg-6">
              <div class="h_blog_img">
                <img class="img-fluid" style="height: 500px" src="{{asset('flash/img/home-blog/h-blog-3.jpg')}}" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="h_blog_text">
                <div class="h_blog_text_inner left">
                  <h4>Nikmati perjalanan <br />1 hari anda bersama kami</h4>
                  <p>If you are looking at blank cassette on the web you may be very confused at the difference in price you may see some.</p>
                  
                </div>
              </div>
            </div>
              </div>
              
            </div>
          </div>
        </section>
        <!--================End Home Blog Area =================-->
        
        <!--================Service Area =================-->
        <section class="service_area p_120">
          <div class="container box_1620">
            <div class="main_title">
              <h2>Anggota Kelompok 4 TRPL B</h2>
              <p>Sistem Twido (Trip Wisata Indonesia) ini dibuat dan dirancang oleh kelompok 4 TRPL kelas D yang beranggotakan :</p>
            </div>
            <div class="row m0 service_inner">
              <div class="col-lg-3 col-md-6 p0">
                <div class="service_img">
                  <img class="img-fluid" src="{{asset('flash/img/service/service-1.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-2 col-md-6 p0">
                <div class="service_text"  style="background-color: #ddd;">
                  <h4>Al Muhtadi Billah<br />Programmer</h4>
                  <p>172410101140</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 p0">
                <div class="service_img">
                  <img class="img-fluid"  style="height: 190px"  src="{{asset('flash/img/service/service-2.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-2 col-md-6 p0">
                <div class="service_text"  style="background-color: #ddd;">
                  <h4>Hilman Aqiel Imawan <br />Tester</h4>
                  <p>172410101127</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 p0">
                <div class="service_img">
                  <img class="img-fluid" src="{{asset('flash/img/service/service-3.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-3 col-md-6 p0">
                <div class="service_text">
                  <h4>Gita Safitri A.A <br />Sistem Analis</h4>
                  <p>172410101035</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 p0">
                <div class="service_img">
                  <img class="img-fluid" style="height: 190px" src="{{asset('flash/img/service/service-4.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-2 col-md-6 p0">
                <div class="service_text">
                  <h4>Al Fikri Zaini Hidayah <br />Projek Manajer</h4>
                  <p>172410101132</p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 p0">
                <div class="service_img">
                  <img class="img-fluid" style="height: 190px" src="{{asset('flash/img/service/service-5.jpg')}}" alt="">
                </div>
              </div>
              <div class="col-lg-3 col-md-6 p0">
                <div class="service_text">
                  <h4>Novita Dwijayanti <br />Desaigner</h4>
                  <p>172410101073</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Service Area =================-->

        
@endsection