<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function index()
    {
        
    }
    public function create(Request $req)
    {
    	$userid = Auth()->user()->id;
    	foreach ($req->tambahkan as $d) {
    	
    	$destinasi = \App\Destinasi::where('id','=',$d)->first();

    	$m = new \App\Tujuan;
    	$m->destinasi_id = $destinasi->id;
    	$m->user_id = $userid;
    	$m->save();
    	}
    	return redirect('/tujuan');
    }
    public function Show()
    {
        $iduser = Auth::user()->id;
        // $tujuan = \App\Tujuan::where('user_id','=', $iduser)->get();
        
         // $tujuan = \App\Destinasi::select('*')
         //    ->join('tujuan','destinasi.id','=','tujuan.destinasi_id')
         //    ->where('user_id','=', $iduser)
         //    ->get();

        // $total = \App\Destinasi::select(SUM(harga));

        // $orders = DB::table('destinasi')
        //         ->select('*', DB::raw('SUM(harga) as total'))
        //         ->havingRaw('SUM(harga) > ?', [2500])
        //         ->get();

        $tujuan = DB::table('destinasi')
            ->join('tujuan', 'destinasi.id_destinasi', '=', 'tujuan.destinasi_id')
            ->select('*')
            ->get();    

        return view('tujuan',compact('tujuan'));
    }

    public function map($id)
    {
        $tujuan = \App\Destinasi::where('id_destinasi','=',$id)->first();
        return view('detail', compact('tujuan'));
    }
    public function getPaket()
    {
        $dp = \App\DetailPaket::whereNotNull('id')->paginate(1);
        return view('admin.paket', compact('dp'));
    }
    public function buatPaket()
    {
        $show = \App\Destinasi::All();
        return view('admin.tambah-paket', compact('show'));
    }
    public function addPaket(Request $req)
    {
        $userid = Auth()->user()->id;
        $x = new \App\DetailPaket;
        $x->id = mt_rand(100,9999);
        foreach ($req->tambahkan as $d) {
        
        $destinasi = \App\Destinasi::where('id','=',$d)->first();

        \App\Paket::create([
            'id' => mt_rand(999,9999),
            'destinasi_id' => $destinasi->id,
            'detail_paket_id' => $x->id,
        ]);
        }
        $x->nama_paket = $req->nama_paket;
        $x->harga = $req->harga_paket;
        $x->save();
        return redirect('/paket-wisata');
    }
}
