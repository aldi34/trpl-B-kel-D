<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $fillable = ['id','paket_id','pengunjung_id','status','jam','tanggal','jumlah_tiket','total_harga','due_date','bukti_bayar','longitude','latitude'];

    public function pengunjung()
    {
    	return $this->belongsTo('App\Pengunjung');
    }
    public function paket()
    {
    	return $this->belongsTo('App\Paket');
    }
}
