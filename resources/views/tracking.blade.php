@extends('/include/index')
@section('title')
Tracking
@endsection

@section('content')
<div class="text" style="margin-top: 80px; width: 100%; height: 80px;">
    
    <h1 style="width: 50%; text-align: center; margin-left: 25%">Pilih Lokasi Anda</h1>
    
</div>
<form action="{{url('/hasil-tracking')}}" method="POST">
{{csrf_field()}}
    <div class="container">
        <select id="kota" name="kota" class="custom-select custom-select-lg mb-3">
            <option value="0" selected="true" disabled="true">Pilih Kota</option>
             @foreach($kota as $k)
               <option value="{{$k->id}}" >{{$k->nama_kota}}</option>
             @endforeach
        </select>

    <select id="kecamatan" name="kecamatan" class="custom-select custom-select-lg mb-3">
      <option value="0" selected="true" disabled="true">Pilih Kota Terlebih Dahulu</option>
    </select>

    <input class="btn btn-secondary btn-lg btn-block" type="submit" value="Cari">
     
    </div>
</form>
@endsection

