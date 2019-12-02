<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
    	$dp = \App\DetailPaket::whereNotNull('id')->paginate(3);
    	return view('user.paket', compact('dp'));
    }
    public function bookNow(Request $req)
    {
    	$minimal = date("Y-m-d H:i:s", time() + (2*86400));
    	$hargaBekal = $req->bekal * $req->jumlah_tiket;
    	$total = $hargaBekal + $req->harga_paket;
    	$timeNow = date("Y-m-d H:i:s", time());
    	$duedate = date("Y-m-d H:i:s", time() + 21600);
    	$userid = Auth::user()->id;
    	// $tgl = date("Y-m-d H:i:s", time() + 21600);
    	$tgl = date("Y-m-d H:i:s",strtotime($req->tanggal));
    	$pengunjung = \App\Pengunjung::where('user_id',$userid)->first();
    	// dd($tgl);
    	if ($req->tanggal >= $minimal) {
    		$a = new \App\Pemesanan;
    		$a->id = mt_rand(100,9999);
    		$a->paket_id = $req->id_paket;
    		$a->status = 'belum bayar';
    		$a->total_harga = $total;
    		$a->pengunjung_id = $pengunjung->id;
    		$a->jam = $req->jam;
    		$a->tanggal = $tgl;
    		$a->jumlah_tiket = $req->jumlah_tiket;
    		$a->due_date = $duedate;
            $a->longitude = $req->longitude;
            $a->latitude = $req->latitude;

    		$a->save();
    		return redirect()->back()->with('sukses','berhasil memesan paket, silahkan lakukan pembayaran');
    	}else{
    		return redirect()->back()->with('gagal','waktu pemesanan minimal 2 hari dari sekarang');
    	}
    }
    public function detailWisata($id)
    {
        // $userid = Auth::user()->id;
        // $pengunjung = \App\Pengunjung::where('user_id',$userid)->first();
        $destinasi = \App\Destinasi::where('id',$id)->first();

        return view('user.view-wisata',compact('destinasi'));
    }
    public function pencariTravel()
    {
        $pesanan = \App\Pemesanan::where('status','lunas')
            ->get();
        return view('mitra.pencari-travel',compact('pesanan'));            
    }
    public function detailJemput($id)
    {
        $userid = Auth::user()->id;

        $map['pesanan'] = \App\Pemesanan::whereId($id)->first();
        $map['mitra'] = \App\Mitra::where('user_id',$userid)->first();
        
        return view('mitra.tracking',compact('map'));
    }
}
