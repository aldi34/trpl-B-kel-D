<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'Kota';

    public function destinasi()
    {
    	return $this->belongsTo('App\Destinasi');
    }
}
