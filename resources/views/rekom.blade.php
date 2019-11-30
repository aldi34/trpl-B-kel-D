@extends('/include/index')
@section('title')
Rekomendasi
@endsection



@section('content')
<form action="{{url('/cari-rekom')}}" method="POST">
{{csrf_field()}}
    <div class="container" style="margin-top: 100px;">
        <select id="provinsi" name="provinsi" class="custom-select custom-select-lg mb-3">
            <option value="0" selected="true" disabled="true">Pilih Provinsi</option>
             @foreach($provinsinya as $p)
               <option value="{{$p->id}}" >{{$p->nama_provinsi}}</option>
             @endforeach
        </select>

    <select id="kota" name="kota" class="custom-select custom-select-lg mb-3">
      <option value="0" selected="true" disabled="true">Pilih Provinsi Terlebih Dahulu</option>
    </select>

    <select id="jenis" name="jenis" class="custom-select custom-select-lg mb-3">
    	<option value="0" selected="true" disabled="true">Pilih wisata</option>
    	<option value="Pantai">Pantai</option>
    	<option value="Gunung">Gunung</option>
    	<option value="Taman">Taman</option>
    	<option value="Air Terjun">Air Terjun</option>
    </select>

    <input class="btn btn-secondary btn-lg btn-block" type="submit" value="Cari">
     
    </div>
</form>
@endsection

@section('script')
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
@stop

