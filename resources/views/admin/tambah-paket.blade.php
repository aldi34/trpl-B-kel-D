@extends('admin.layouts.template')

@section('content')
<div class="content-wrapper">
  <div class="content-header">
  	<br>
<form action="/tambahkan-paked" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Paket</label>
    <input type="text" name="nama_paket" class="form-control" placeholder="Masukkan nama paket">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Paket</label>
    <input type="number" name="harga_paket" class="form-control" placeholder="Masukkan harga paket">
  </div>
  	<div class="row">
			@foreach($show as $sh)
		
	            <div class="col-md-4">
	              <div class="card mb-4 box-shadow">
	                <img class="card-img-top" src="{{url('/fotoDestinasi/'.$sh->gambar)}}" alt="Card image cap" class="img" style="width: 318px; height: 200px;">
	                <div class="card-body">
	                  <p class="card-text">@currency($sh->harga)/Orang</p>
	                  <h1 class="card-text" style="font-size: 20px;">{{$sh->nama_destinasi}}</h1>
	                  <p class="card-text">{{$sh->nama_kota}}, {{$sh->nama_provinsi}}</p>
	                  <div class="d-flex justify-content-between align-items-center">
	                    <div class="btn-group">
	                    </div>
	                    <input type="checkbox" style="margin-left: 10px; width: 30px; height: 30px;" name="tambahkan[]" id="" value="{{$sh->id}}">
	                    <small class="text-muted">{{$sh->tipe_destinasi}}</small>
	                  </div>
	                </div>
	              </div>
	            </div>

			@endforeach
		</div>
		<button type="submit" class="btn btn-primary">Buat</button>
  </div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>
    $("input:checkbox").click(function() {
    var bol = $("input:checkbox:checked").length >= 3;     
    $("input:checkbox").not(":checked").attr("disabled",bol);
    });
</script>
@stop