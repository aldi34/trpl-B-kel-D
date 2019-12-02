@extends('user.layouts.template')
@section('title')
Rekomendasi
@endsection

@section('content')
  <section class="jumbotron text-center" >
        <div class="container">
          <h1 class="jumbotron-heading">Pesanan Anda</h1>
          <p class="lead text-muted">Berikut Beberapa Paket Yang Anda Pesan.</p>
        </div>
  </section>
<!-- TUTUP -->
<div class="container">

@if(session('sukses'))
<div class="alert alert-success" >
{{session('sukses')}}
</div>
@endif
@if(session('gagal'))
<div class="alert alert-danger" >
{{session('gagal')}}
</div>
@endif


<table class="table table-bordered text-center"  style="margin-bottom: 200px">
	<thead class="thead-dark">
		<th>No</th>
		<th>Nama Paket</th>
		<th>Total Bayar</th>
		<th>#</th>
	</thead>
	<tbody>
		@foreach($pesanan as $p => $pp)		
		<tr>
			<td>{{$p+1}}</td>
			<td>{{$pp->paket->detailPaket->nama_paket}}</td>
			<td>@currency($pp->total_harga)</td>
			<td>
				@if($pp->bukti_bayar == "")
				<a href="/bayar-sekarang/{{$pp->id}}" class="btn btn-primary btn-sm">Bayar</a>
				@else
				<a href="/edit-pembayaran/{{$pp->id}}" class="btn btn-primary btn-sm">Edit</a>
				@endif
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@stop