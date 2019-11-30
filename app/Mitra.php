<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected $table = 'mitra';
    protected $fillable = ['id','user_id','nama_mitra','nama_pemilik','nomer_ktp','jenis_kelamin','jenis_kendaraan','jumlah_kendaraan','no_telp','email','latitude','longitude', 'status'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
