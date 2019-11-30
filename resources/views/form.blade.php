@extends('/include/index')
@section('title')
Isi Formulir
@endsection

@section('content')
<div class="text" style="margin-top: 80px; width: 100%; height: 80px;">
	
	<h1 style="width: 50%; text-align: center; margin-left: 25%">Isi Formulir Dibawah Ini</h1>
	
</div>
<div class="container">
	<form class="needs-validation" action="/formulir" method="POST" novalidate>
    {{csrf_field()}}
  <div class="form-group">
    <label for="namalengkap">Nama Lengkap</label>
    <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap">
  </div>
  <div class="form-group">
    <label for="ktp">Nomer KTP</label>
    <input type="number" class="form-control" id="ktp" name="ktp" placeholder="Masukkan Nomer KTP">
  </div>
  <div class="row" style="margin-bottom: 15px;">
    <div class="col">
    	<label for="tempatlahir">Tempat Kelahiran</label>
      <input type="text" id="tempatlahir" name="tempatlahir" class="form-control" placeholder="Masukkan Tempat Kelahiran">
    </div>
    <div class="col">
    	<label for="tgllahir">Tanggal Lahir</label>
        <input type="date" id="tgllahir" name="tgllahir" max="3000-12-31" 
        min="1000-01-01" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="gender">Jenis Kelamin</label>
  <select name="gender" id="gender" class="form-control">
        <option value="" disabled selected>Pilih Jenis Kelamin</option>
        <option value="laki-laki">Laki-Laki</option>
        <option value="perempuan">Perempuan</option>
  </select>
</div>
<div class="row" style="margin-bottom: 15px;">
    <div class="col">
      <label for="telp">Nomer Telepon</label>
    <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukkan Nomer KTP">
    </div>
    <div class="col">
      <label for="email">Alamat Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email">
    </div>
  </div>
  <div class="form-group">
    <label for="kotatinggal">Kota Tempat Tinggal</label>
    <input type="text" class="form-control" id="kotatinggal" name="kotatinggal" placeholder="Masukkan Kota Tempat Tinggal">
  </div>
  <div class="form-group">
    <label for="tiket">Jumlah Tiket</label>
    <input type="number" class="form-control" id="tiket" name="tiket" placeholder="Masukkan Jumlah Tiket">
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Jenis Tiket</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Biasa" checked>
          <label class="form-check-label" for="gridRadios1">
            Biasa
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Paket">
          <label class="form-check-label" for="gridRadios2">
            Paket
          </label>
        </div>
        
    </div>
  </fieldset>

  <a href="" class="btn btn-outline-success btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">Selesai</a>
  
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Berhasil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>
            <div class="modal-body">
             Permintaan Anda Sedang Diproses, Tunggu Email Atau Pesan Di Nomer Telepon Anda
            </div>
            <div class="modal-footer">
              <a href="beranda" class="btn btn-secondary">Tutup</a>
            </div>
          </div>
        </div>
      </div>
</form>
</div>

@endsection


