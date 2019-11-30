<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'Kecamatan';

    public function destinasi()
    {
    	return $this->belongsTo('App\Destinasi');
    }
}
