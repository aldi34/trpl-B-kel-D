<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifikasiController extends Controller
{
    public function create(Request $req)
    {
    	\App\Pembeli::create([
	 			'id' => mt_rand(1000,9999),
	 			'nama_lengkap' => $req->namalengkap,
	 			'no_ktp' => $req->ktp,
	 			'tempat_lahir' => $req->tempatlahir,
	 			'tgl_lahir' => $req->tgllahir,
	 			'jenis_kelamin' => $req->gender,
	 			'no_telp' => $req->telp,
	 			'email' => $req->email,
	 			'kota_tinggal' => $req->kotatinggal,
	 			'tanggal' => $req->tanggal,
	 			'bulan' => $req->bulan,
	 			'tahun' => $req->tahun,
	 			'jam' => $req->jam,
	 			'jumlah_tiket' => $req->tiket,
	 			'bekal' => $req->bekal,
	 			'status' => 0,
	 			]);
    	return view ('beranda');
    }
}
