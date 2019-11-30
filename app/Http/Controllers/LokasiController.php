<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function create(Request $req)
    {
    	\App\Lokasi::create([
    		'latitude'  => $req->latitude,
            'longitude' => $req->longitude,
        ]);
        return view ('rekomendasi');
    }
}
