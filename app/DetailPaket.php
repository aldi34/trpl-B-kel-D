<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPaket extends Model
{
    protected $table = 'detail_paket';
    protected $fillable = ['id','nama_paket','harga'];

    public function paket()
    {
    	return $this->hasMany('App\Paket');
    }
}
