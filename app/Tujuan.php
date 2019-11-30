<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    protected $table = 'tujuan';
    protected $fillable = ['Id','destinasi_id','user_id'];

    // public function destinasi()
    // {
    // 	return $this->has
    // }
}
