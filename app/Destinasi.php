<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $table = 'destinasi';
    protected $fillable = ['id','nama_destinasi','tipe_destinasi','provinsi_id','kota_id','nama_kota','nama_provinsi','harga','gambar','Latitude','longitude'];

    public function getAvatar()
    {
    	if(!$this->gambar){
    		return asset('fotoDestinasi/default.jpg');
    	}
    	return asset('fotoDestinasi/'.$this->gambar);
    }
    public function Provinsi()
    {
    	return $this->hasMany('App\Provinsi');
    }
    public function Kota()
    {
    	return $this->hasMany('App\Kota');
    }
    public function paket()
    {
        return $this->hasMany('App\Paket');
    }
}
