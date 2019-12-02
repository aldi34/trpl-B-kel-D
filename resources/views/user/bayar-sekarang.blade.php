@extends('user.layouts.template')
@section('title')
Rekomendasi
@endsection

@section('content')
<style type="text/css">
	.file {
  visibility: hidden;
  position: absolute;
}
</style>

  <section class="jumbotron text-center" >
        <div class="container">
          <h1 class="jumbotron-heading">Upload Bukti Pembayaran</h1>
          <p class="lead text-muted">Silahkan melakukan pembayaran ke No.Rekening 909886875649775, Seharga <strong>@currency($pesanan->total_harga)</strong>  dan upload bukti pembayaran anda.</p>

        </div>
  </section>
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

<div class="container" style="margin-bottom: 300px;">
<div class="row justify-content-md-center">
<div class="ml-2 col-sm-6">
  <div id="msg"></div>
  <form method="post" id="image-form" action="{{url('upload-bukti-bayar')}}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="img" class="file" accept="image/*">
    <div class="input-group my-3">
      <input type="text" required class="form-control" disabled placeholder="Upload Bukti Pembayaran" id="file">
      <input type="hidden" name="idnya" value="{{$pesanan->id}}">
      <div class="input-group-append">
        <button type="button" class="browse btn btn-primary">Cari File...</button>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Upload Bukti</button>
  </form>
</div>
<div class="ml-2 col-sm-6">
  <img src="" id="preview" class="img-thumbnail">
</div>
</div>
</div>



@stop
@section('script')
<script>
	$(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});
</script>
@stop