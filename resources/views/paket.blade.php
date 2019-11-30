@extends('/include/index')
@section('title')
Rekomendasi
@endsection

@section('content')
	<section class="jumbotron text-center" style="margin-top: 50px;">
        <div class="container">
          <h1 class="jumbotron-heading">Rekomendasi Wisata</h1>
          <p class="lead text-muted">Berikut Paket Yang Anda Pilih. Silahkan Untuk Mengisi Keperluan Lainnya.</p>
        </div>
    </section>

    <div class="container">
			<div class="row" style=" margin-top: 50px; margin-left: 10px;">
			

				<div class="col-md-4">
	              <div class="card mb-4 box-shadow">
	                <img class="card-img-top" src="{{asset('fotoDestinasi/payangan.jpg')}}" alt="Card image cap" class="img" style="width: 340px; height: 200px;">
	                <div class="card-body">
	                  <p class="card-text">@currency(5000)/Orang</p>
	                  <h1 class="card-text" style="font-size: 20px;">Payangan</h1>
	                  <p class="card-text">Jember, Jawa Timur</p>
	                  <div class="d-flex justify-content-between align-items-center">
	                  	<div class="btn-group">
	                  		<a href="/test" class="btn btn-sm btn-outline-secondary">Lihat Map</a> 
	                    </div>
	                    <small class="text-muted">Pantai</small>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-md-4">
	              <div class="card mb-4 box-shadow">
	                <img class="card-img-top" src="{{asset('fotoDestinasi/love.jpg')}}" alt="Card image cap" class="img" style="width: 340px; height: 200px;">
	                <div class="card-body">
	                  <p class="card-text">@currency(6000)/Orang</p>
	                  <h1 class="card-text" style="font-size: 20px;">Teluk Love</h1>
	                  <p class="card-text">Jember, Jawa Timur</p>
	                  <div class="d-flex justify-content-between align-items-center">
	                  	<div class="btn-group">
	                  		<a href="" class="btn btn-sm btn-outline-secondary">Lihat Map</a> 
	                    </div>
	                    <small class="text-muted">Pantai</small>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-md-4">
	              <div class="card mb-4 box-shadow">
	                <img class="card-img-top" src="{{asset('fotoDestinasi/papuma.jpg')}}" alt="Card image cap" class="img" style="width: 340px; height: 200px;">
	                <div class="card-body">
	                  <p class="card-text">@currency(7000)/Orang</p>
	                  <h1 class="card-text" style="font-size: 20px;">Papuma</h1>
	                  <p class="card-text">Jember, Jawa Timur</p>
	                  <div class="d-flex justify-content-between align-items-center">
	                  	<div class="btn-group">
	                  		<a href="" class="btn btn-sm btn-outline-secondary">Lihat Map</a> 
	                    </div>
	                    <small class="text-muted">Pantai</small>
	                  </div>
	                </div>
	              </div>
	            </div>
	            

	            
		

			</div>
<form action="/kirim-data" method="POST">
  {{csrf_field()}}
<div class="card border-dark mb-8" style="margin-left: 25px;">
  

<div class="card-header bg-transparent border-dark" style="border-top: 1px solid #000">Data Keberangkatan</div>
  <div class="card-body text-dark">


<label >Tanggal Keberangkatan</label>
  <div class="form-row align-items-center">
    <input type="date" name="tgl" value="" class="form-control">
   <!--  <div class="col-auto my-1">
      <select class="custom-select mr-sm-2" id="tanggal" name="tanggal">
        <option selected>Tanggal</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
      </select>
    </div>
    <div class="col-auto my-1">
      <select class="custom-select mr-sm-2" id="bulan" name="bulan">
        <option selected>Bulan</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
    </div>
    <div class="col-auto my-1">
    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun"> -->
</div>

  </div>


 <div class="form-group">
    <label for="exampleFormControlSelect1">Jam Keberangkatan (AM)</label>
    <select class="form-control" id="jam" name="jam">
      <option value="7">7</option>
      <option value="8">8</ option>
      <option value="9">9</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tiket">Jumlah Tiket</label>
    <input type="number" class="form-control" id="tiket" name="tiket" placeholder="Masukkan Jumlah Tiket">
  </div>

 

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Bekal Makanan</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="bekal" id="bawa" value="Bawa" checked>
          <label class="form-check-label" for="bawa">
            Bawa Sendiri
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="bekal" id="disediakan" value="Disediakan">
          <label class="form-check-label" for="disediakan">
            Disediakan Pihak Travel
          </label>
        </div>
    </div>
  </fieldset>

  </div>
  <div class="card-footer bg-transparent border-dark">Total Harga : <p id="total"></p></div>

</div>
				
<input style="margin-left: 20px; margin-top: 50px" value="Selesai (Proses Wisata)" name="" class="btn btn-outline-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModalCenter">

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
                  <input type="submit" name="" class="btn btn-secondary" value="Tutup">
                </div>
              </div>
            </div>
          </div>
			</form>
</div>
    
@endsection