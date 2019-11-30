<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
  @yield('link')
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="{{asset('home/img/favicon.png')}}" rel="icon">
  <link href="{{asset('home/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('home/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('home/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('home/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('home/css/style.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="#">TWIDO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="margin-left: 1000px;">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="beranda">Beranda <span class="sr-only">(current)</span></a>
      </li> -->
      <!-- <li class="nav-item active" style="margin-left: 20px;">
        <a class="nav-link" href="rekom">Rekomendasi <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="margin-left: 20px;">
        <a href="" class="btn btn-primary">Beli Paket</a>
      </li> -->
      <li>
        <a href="{{empty(Auth::user()->name) ? "/login" : "/logout"}}" class="btn btn-outline-primary my-2 my-sm-0" style="margin-left: 55px;">{{empty(Auth::user()->name) ? "Login" : "Logout"}}</a>
      </li>
    </ul>
  </div>
</nav>
@yield('content')

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

</body>
</html>

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

@yield('script')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="{{asset('home/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('home/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('home/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('home/lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('home/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{asset('home/lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('home/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('home/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('home/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('home/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('home/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('home/js/main.js')}}"></script>

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



