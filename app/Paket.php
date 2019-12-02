<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = ['id','destinasi_id','detail_paket_id'];

    public function destinasi()
    {
    	return $this->belongsTo('App\Destinasi');
    }
    public function detailPaket()
    {
    	return $this->belongsTo('App\DetailPaket');
    }
    public function pemesanan()
    {
        return $this->hasMany('App\Pemesanan');
    }
}
