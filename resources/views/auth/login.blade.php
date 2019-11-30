<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="login-reg-panel">
    <div class="login-info-box">
      <h2>Sudah Punya Akun ?</h2>
      <label id="label-register" for="log-reg-show">Masuk</label>
      <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
    </div>
              
    <div class="register-info-box">
      <h2>Belum Punya Akun ?</h2>
      <label id="label-login" for="log-login-show">Daftar</label>
      <input type="radio" name="active-log-panel" id="log-login-show">
    </div>
              
    <div class="white-panel">
      <div class="login-show">
        <!-- LOGIN -->
    <form class="login100-form validate-form" action="/postlogin", method="POST">
          {{csrf_field()}}
        <h2>MASUK</h2>
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="Submit" value="Masuk">
        <a href="">Lupa Password ?</a>
      </div>
    </form>

      <!-- Register -->
  <form action="/postRegister" method="POST">
    {{csrf_field()}}
      <div class="register-show">
        <h2>DAFTAR</h2>
        <input type="text" placeholder="Nama Lengkap" name="nama_lengkap">
        <input type="number" placeholder="Nomer KTP" name="ktp">
        <input type="text" placeholder="Alamat Email" name="email">
        <input type="number" placeholder="Nomer Telepon" name="notelp">
        <select name="gender" class="form-control">
            <option value="" disabled selected>Jenis Kelamin</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        <input type="password" name="password1" placeholder="Password">
        <input type="password" name="password2" placeholder="Confirm Password">
        <input type="Submit" value="Daftar">
      </div>
    </form>


    </div>
  </div>

  <style type="text/css">
       
@import url('https://fonts.googleapis.com/css?family=Mukta');
body{
  font-family: 'Mukta', sans-serif;
  height:100vh;
  min-height:550px;
  background-image: url();
  background-repeat: no-repeat;
  background-size:cover;
  background-position:center;
  position:relative;
  overflow-y: hidden;
}
a{
  text-decoration:none;
  color:#444444;
}

h2{
  font-size: 30px;
}
.login-reg-panel{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
  text-align:center;
    width:70%;
  right:0;left:0;
    margin:auto;
    height:400px;
    background-color: #444444;
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    height:500px;
    position:absolute;
    top:-50px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
    box-shadow: 0 0 15px 9px #00000096;
    height: 600px;
    margin-top: -50px;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
}
.login-reg-panel{
    color:#B8B8B8;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid #007bff;
    color: #fff;
    padding:5px 5px;
    width:150px;
    display:block;
    text-align:center;
    border-radius:10px;
    cursor:pointer;
    font-weight: 600;
    font-size: 18px;
    background-color: #007bff;
}
.login-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
}
.register-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    
}
.right-log{right:50px !important;}

.login-show,
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:50px;
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
.login-show input[type="text"], .login-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.login-show input[type="Submit"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
    display:inline-block;
    padding:10px 0;
    color: #007bff;
}

.register-show input[type="text"], .register-show input[type="number"], .register-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 8px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.register-show input[type="Submit"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
}
a{
  text-decoration:none;
  color:#2c7715;
}
    
  </style>

  <script type="text/javascript">
    
    $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  

  </script>