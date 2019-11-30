<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function provinsi(){
        $provinsinya = \App\Provinsi::All();
        return view('admin.tambah-wisata',['provinsinya' => $provinsinya]);
    }
    public function kota(Request $request){
        $id_provinsi = $request->provinsi_id;
        $kota = \App\Kota::where('provinsi_id','=', $id_provinsi)->get();
        return response()->json($kota);
    }
    public function cari(Request $request){
        $kotaPencarian = \App\Kota::where('id','=',$request->kota)->first();
        $provinsiPencarian = \App\Provinsi::where('id','=',$request->provinsi)->first();

        $hasilcari = \App\Destinasi::select('*')
            ->where('provinsi_id','=',$request->provinsi)
            ->where('kota_id','=',$request->kota)
            ->where('tipe_destinasi','=',$request->jenis)
            ->get();
        return view('hasilcari',['hasilcari' => $hasilcari, 'kotaPencarian' => $kotaPencarian, 'provinsiPencarian' => $provinsiPencarian]);
    }

    public function delete(Request $request)
    {
         DB::table('lokasi')->delete();
         return view ('start');
    }

    public function show()
    {
       $show = \App\Destinasi::All();
       return view ('admin.lihatwisata', compact('show'));
    }

    public function map(Request $request)
    {
       $map = \App\Destinasi::where('id_destinasi','=',4)->first();
       $map2 = \App\Lokasi::All()->first();

       return view ('test', compact('map', 'map2'));
    }

    public function create(Request $req)
    {
        if ($req->password1 !== $req->password2) {
            return redirect()->back();
        }else{
        $cek = \App\User::where('email','=', $req->email)->first();
        if (!empty($cek)) {
            return redirect()->back();
        }else{

        $u = new \App\User;
        $u->id = mt_rand(1000,9999);
        \App\Mitra::create([
                'id' => mt_rand(1000,9999),
                'user_id' => $u->id,
                'nama_mitra' => $req->namamitra,
                'nama_pemilik' => $req->nama,
                'nomer_ktp' => $req->ktp,
                'jenis_kelamin' => $req->gender,
                'jenis_kendaraan' => $req->jenis,
                'jumlah_kendaraan' => $req->jumlah,
                'no_telp' => $req->telp,
                'email' => $req->email,
                'latitude'  => $req->latitude,
                'longitude' => $req->longitude,
                'status' => 0,
        ]);
        $u->role = 'mitra';
        $u->name = $req->namamitra;
        $u->email = $req->email;
        $u->password = bcrypt($req->password2);
        $u->save();
        return view ('beranda');
        }
        }
    }

    public function show2(Request $request)
    {
       $show = \App\Pembeli::All();
       return view ('admin.req-pelanggan', compact('show'));
    }

    public function showw(Request $request)
    {
       $show = \App\Pembeli::All();
       return view ('admin.dataPelanggan', compact('show'));
    }

    public function show3(Request $request)
    {
       $show = \App\Mitra::where('status','=',0)->paginate(5);
       return view ('admin.req-mitra', compact('show'));
    }    

    public function showw3(Request $request)
    {
       $show = \App\Mitra::where('status','=',1)->paginate(5);
       return view ('admin.dataMitra', compact('show'));
    }    

    public function create2(Request $req)
    {
        $p = \App\Provinsi::where('id',$req->provinsi)->first();
        $namaProv = $p->nama_provinsi;

        $k = \App\Kota::where('id',$req->kota)->first();
        $namaKota = $k->nama_kota;

        \App\Destinasi::create([
                'id_destinasi'=> mt_rand(1000,9999),
                'nama_destinasi' => $req->namadest,
                'tipe_destinasi' => $req->wisata,
                'provinsi_id' => $req->provinsi,
                'kota_id' => $req->kota,
                'nama_provinsi'=> $namaProv,
                'nama_kota'=> $namaKota,
                'harga'=> $req->harga,
                'gambar'=> $req->pict,
                'Latitude'=> $req->latitude,
                'longitude'=> $req->longitude,
        ]);
        return redirect('/lihatwisata');
    }

    public function verifMitra(Request $req)
    {
        \App\Mitra::where('id',$req->id_mitra)
            ->update([
                 'status' => 1,   
            ]);
        return redirect()->back();
    }
    
}
