<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'pembeli';
    protected $fillable = ['id','nama_lengkap','no_ktp','tempat_lahir','tgl_lahir','jenis_kelamin','no_telp','email','kota_tinggal','tanggal','bulan','tahun','jam','jumlah_tiket','bekal','status'];
}
