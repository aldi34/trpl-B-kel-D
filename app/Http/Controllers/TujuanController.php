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
    	
    	$destinasi = \App\Destinasi::where('id_destinasi','=',$d)->first();

    	$m = new \App\Tujuan;
    	$m->destinasi_id = $destinasi->id_destinasi;
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
    public function storePaket()
    {
        return view('admin.paket');
    }
}
