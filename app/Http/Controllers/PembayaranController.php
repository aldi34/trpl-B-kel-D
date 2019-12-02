<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\SendEmail;
use Auth;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
    	$userid = Auth::user()->id;
    	$pengunjung = \App\Pengunjung::where('user_id',$userid)->first();
    	$pesanan = \App\Pemesanan::where('pengunjung_id',$pengunjung->id)->get();

    	return view('user.pesanan',compact('pesanan'));
    }
    public function uploadBukti($id)
    {
    	$pesanan = \App\Pemesanan::where('id',$id)->first();
    	return view('user.bayar-sekarang', compact('pesanan'));
    }
    public function storeBukti(Request $req)
    {
    	// $a = $req->file('img')->getClientOriginalName();
    	$tempatfile = ('foto_pembayaran');
    	$a1 = $req->file('img')->getClientOriginalName();
            if ((strpos($a1, "JPG") || strpos($a1, "PNG") || strpos($a1, "jpg") || strpos($a1, "png") || strpos($a1, "jpeg") || strpos($a1, "JPEG")) == false) {
                return redirect()->back()->with('gagal','Silahkan upload bukti berupa PNG, JPG, atau JPEG');
        }else{
        	$gbr = $req->file('img');
            $nama_Gbr = $gbr->getClientOriginalName();
            $gbr->move($tempatfile, $nama_Gbr);

    		\App\Pemesanan::where('id',$req->idnya)
    			->update([
    				'bukti_bayar' => $nama_Gbr,
    			]);
	    	return redirect('/pesanan-anda')->with('sukses','berhasil mengirim bukti pembayaran');
    	}
    }
    public function editBukti($id)
    {
    	$pesanan = \App\Pemesanan::whereId($id)->first();
    	return view('user.edit-pembayaran',compact('pesanan'));
    }
    public function updateBukti(Request $req)
    {
    	$tempatfile = ('foto_pembayaran');
    	$a1 = $req->file('img')->getClientOriginalName();
            if ((strpos($a1, "JPG") || strpos($a1, "PNG") || strpos($a1, "jpg") || strpos($a1, "png") || strpos($a1, "jpeg") || strpos($a1, "JPEG")) == false) {
                return redirect()->back()->with('gagal','Silahkan upload bukti berupa PNG, JPG, atau JPEG');
        }else{
        	$gbr = $req->file('img');
            $nama_Gbr = $gbr->getClientOriginalName();
            $gbr->move($tempatfile, $nama_Gbr);

    		\App\Pemesanan::where('id',$req->idnya)
    			->update([
    				'bukti_bayar' => $nama_Gbr,
    			]);
	    	return redirect('/pesanan-anda')->with('sukses','berhasil mengubah bukti pembayaran');
    	}
    }
    public function adminDisplay()
    {
    	$bayar = \App\Pemesanan::select('*')
    		->where('status','belum bayar')
    		->whereNotNull('bukti_bayar')
    		->get();
    	return view('admin.bukti-bayar',compact('bayar'));
    }
    public function tolakBukti(Request $req)
    {
    	\App\Pemesanan::whereId($req->idnya)
    		->update([
    			'status' => 'ditolak',
    		]);
    	return redirect()->back()->with('sukses','berhasil menolak bukti');
    }
    public function accBukti(Request $req)
    {
    	\App\Pemesanan::whereId($req->idnya)
    		->update([
    			'status' => 'lunas',
    		]);

    	$subject = 'Pembayaran Anda Telah Terverifikasi';
        $message = $req->contoh;	
        $email = $req->emailnya;
        Mail::to($email)->send( new SendEmail($subject, $message));
    
    	return redirect()->back()->with('sukses','berhasil menerima bukti');
    }
}
