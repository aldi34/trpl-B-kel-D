<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function provinsi(){
        $provinsinya = \App\Provinsi::All();
        return view('rekom',['provinsinya' => $provinsinya]);
    }
    public function kota(Request $request){
        $id_provinsi = $request->provinsi_id;
        $kota = \App\Kota::where('provinsi_id','=', $id_provinsi)->get();
        return response()->json($kota);
    }
    public function cari(Request $request){
        $kotaPencarian = \App\Kota::where('id','=',$request->kota)->first();
        $provinsiPencarian = \App\Provinsi::where('id','=',$request->provinsi)->first();

        DB::table('tujuan')->delete();

        if ($request->jenis=="") {
            $hasilCari1 = "";
        }else{
            $hasilCari1 =  $request->jenis;  
        }
        if ($request->provinsi=='') {
            $hasilCari2 = "";
        }else{
            $hasilCari2 = $request->provinsi;
        }
        if ($request->kota=='') {
            $hasilCari3 = "";
        }else{
            $hasilCari3 = $request->kota;
        }

           $hasilcari = \App\Provinsi::select('*')
            ->join('destinasi','provinsi.id','=','destinasi.provinsi_id')
            // ->join('kota','destinasi.id','=','destinasi.kota_id')
            ->where('provinsi_id','like' ,'%'. $hasilCari2 .'%' )
            ->where('kota_id','like', '%'. $hasilCari3 .'%')
            ->where('tipe_destinasi','like', '%'. $hasilCari1 . '%')
            ->get();

        // $cariRekom = \App\Destinasi::select        


        // $hasilcariaa = \App\Destinasi::select('*')
        //     ->where('provinsi_id','=' , $request->provinsi)
        //     ->where('kota_id','like', '%'. $hasilCari3 .'%')
        //     ->where('tipe_destinasi','like', '%'. $hasilCari1 . '%')
        //     ->get();

        return view('hasilcari',['hasilcari' => $hasilcari, 'kotaPencarian' => $kotaPencarian, 'provinsiPencarian' => $provinsiPencarian]);
    }
    // public function wisata(Request $request){
    //     $id_kota = $request->kota_id;
    //     $wisata = \App\Wisata::where('kota_id','=', $id_kota)->get();
    //     return response()->json($wisata);
    // }

    // public function mail(Request $request)
    // {
    //  $checkboxes = $request->input('checkbox');

    //     foreach($checkboxes as $id) {
    //         DB::table('tujuan')->where('id', $id)->delete();
    //     }
    //     return view('tujuan');
    // }
    
}
