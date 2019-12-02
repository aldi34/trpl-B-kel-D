<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>@yield('title')</title>
        <!-- Bootstrap CSS -->
          @yield('link')

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('flash/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('flash/vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{asset('flash/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('flash/vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('flash/vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{asset('flash/vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('flash/vendors/animate-css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('flash/vendors/popup/magnific-popup.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{asset('flash/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('flash/css/responsive.css')}}">

        <style type="text/css">
  .footer {
  background-color: #414141;
  width: 100%;
  text-align: left;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 16px;
  padding: 50px;
  margin-top: 50px;
}

.footer .footer-left,
.footer .footer-center,
.footer .footer-right {
  display: inline-block;
  vertical-align: top;
}


/* footer left*/

.footer .footer-left {
  width: 33%;
  padding-right: 15px;
}

.footer .about {
  line-height: 20px;
  color: #ffffff;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer .about span {
  display: block;
  color: #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer .icons {
  margin-top: 25px;
}

.footer .icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;
  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;
  margin-right: 3px;
  margin-bottom: 5px;
}


/* footer center*/

.footer .footer-center {
  width: 30%;
}

.footer .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0;
}

.footer .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer .footer-center p a {
  color: #0099ff;
  text-decoration: none;
}


/* footer right*/

.footer .footer-right {
  width: 35%;
}

.footer h2 {
  color: #ffffff;
  font-size: 36px;
  font-weight: normal;
  margin: 0;
}

.footer h2 span {
  color: #0099ff;
}

.footer .menu {
  color: #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer .menu a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
}

.footer .menu a:hover {
  color: #0099ff;
}

.footer .name {
  color: #0099ff;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

@media (max-width: 767px) {
  .footer {
    font-size: 14px;
  }
  .footer .footer-left,
  .footer .footer-center,
  .footer .footer-right {
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }
  .footer .footer-center i {
    margin-left: 0;
  }
}
</style>
</head>
<body>
<!--================Header Menu Area =================-->
        <header class="header_area" style="z-index: 9999; background-color: #000">
            <div class="main_menu">
              <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="" style="color: #fff">TWIDO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="/">Beranda</a></li> 
                <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="mitra">Daftar Mitra</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Login</a></li>
              </ul>
            </div> 
          </div>
              </nav>
            </div>
        </header>
        @yield('content')

                <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        @yield('script')

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script type="text/javascript">
        $('#provinsi').on('change', function(e){
                console.log(e);
                var id_provinsi = e.target.value;
                $.get('/json-kota?provinsi_id=' + id_provinsi, function(data){
                    $('#kota').empty();
                    $('#kota').append('<option value="0" selected="true" disabled="true">Pilih Kota Anda</option>')
                    $.each(data, function(index, kotaObj){
                        $('#kota').append('<option value="'+kotaObj.id +'">'+ kotaObj.nama_kota +'</option>')
                    })
                });
            }); 
        </script>

        <script type="text/javascript">
        $('#kota').on('change', function(e){
                console.log(e);
                var id_kota = e.target.value;
                $.get('/json-kecamatan?kota_id=' + id_kota, function(data){
                    $('#kecamatan').empty();
                    $('#kecamatan').append('<option value="0" selected="true" disabled="true">Pilih Kecamatan Anda</option>')
                    $.each(data, function(index, kecamatanObj){
                        $('#kecamatan').append('<option value="'+kecamatanObj.id +'">'+ kecamatanObj.nama_kecamatan +'</option>')
                    })
                });
            }); 
        </script>

    

        <script>
            $("input:checkbox").click(function() {
            var bol = $("input:checkbox:checked").length >= 5;     
            $("input:checkbox").not(":checked").attr("disabled",bol);
            });
        </script>


        <script src="{{asset('flash/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('flash/js/popper.js')}}"></script>
        <script src="{{asset('flash/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('flash/js/stellar.js')}}"></script>
        <script src="{{asset('flash/vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('flash/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('flash/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('flash/vendors/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('flash/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('flash/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('flash/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('flash/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('flash/vendors/counter-up/jquery.counterup.js')}}"></script>
        <script src="{{asset('flash/js/mail-script.js')}}"></script>
        <script src="{{asset('flash/js/theme.js')}}"></script>
</body>
      
      <footer class="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <p class="about">
      <span> Tentang TWIDO</span> Twido merupakan sistem pembelian paket wisata berbasis web yang melayani pelanggan selama 1 hari penuh dengan bekerjasama dengan beberapa mitra. <br><br>Trip Wisata Indonesia
    </p>
    <div class="icons">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-google-plus"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
  </div>
  <div class="footer-center col-md-4 col-sm-6">
    <div>
      <i class="fa fa-map-marker"></i>
      <p><span> Jl.Kalimantan No. 37, 68121</span> Jember, Jawa Timur, Indonesia</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p> (0331) 334-270 | (0331) 330-224</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="#"> iniakunsosmed123@gmail.com</a></p>
    </div>
  </div>
  <div class="footer-right col-md-4 col-sm-6">
    <h2> 1 Day Trip<span> Twido</span></h2>
    <p class="menu">
      <a href="#"> Kelompok 4</a> |
      <a href="#"> TRPL B</a> |
      <a href="#"> Fasilkom</a> |
      <a href="#"> Universitas Jember</a> |
      <a href="#"> Jawa Timur</a>
    </p>
    <p class="name"> Trip Wisata Indonesia &copy; 2019</p>
  </div>
</footer>

</html>






























