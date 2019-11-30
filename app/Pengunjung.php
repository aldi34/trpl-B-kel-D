<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    protected $table = 'pengunjung';
    protected $fillable = ['id','user_id','nama_lengkap','no_ktp','email','no_telp','jenis_kelamin'];
}