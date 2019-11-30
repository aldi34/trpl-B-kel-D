<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function kota(){
        $kota = \App\Kota::All();
        return view('tracking',['kota' => $kota]);
    }

    public function kecamatan(Request $request){
        $id_kota = $request->kota_id;
        $kecamatan = \App\Kecamatan::where('kota_id','=', $id_kota)->get();
        return response()->json($kecamatan);
    }

    public function carii(Request $request){
        $kotaPencarian = \App\Kota::where('id','=',$request->kota)->first();
        $kecamatanPencarian = \App\Kecamatan::where('id','=',$request->kecamatan)->first();

        if ($request->kota=='') {
            $cariTracking1 = "";
        }else{
            $cariTracking1 = $request->kota;
        }

        if ($request->kecamatan=='') {
            $cariTracking2 = "";
        }else{
            $cariTracking2 = $request->kecamatan;
        }

           // $cariTracking = \App\Kota::select('*')
           //  ->join('kecamatan','kota.id','=','kecamatan.kota_id')
           //  ->where('kota_id','like', '%'. $cariTracking1 .'%')
           //  ->where('kecamatan_id','like', '%'. $cariTracking2 .'%')
           //  ->first();


        // $cariTracking = DB::table('destinasi')
        //     ->join('kota', 'destinasi.destinasi_id', '=', 'kota.kota_id')
        //     ->join('kecamatan', 'kecamatan.destinasi_id', '=', 'destinasi.id')
        //     ->where('kota_id','like', '%'. $cariTracking1 .'%')
        //     ->get();

        // $data = DB::table('destinasi')
        //     ->join('kota', 'kota.kota_id', '=', 'destinasi.kota_id')
        //     ->join('kecamatan', 'kecamatan.kecamatan_id', '=', 'kota.kecamatan_id')
        //     // ->where('kota_id','like', '%'. $cariTracking1 .'%')
        //     ->get();


        $kec = \App\Kecamatan::where('id','=',$cariTracking2)->first();
        $kot = \App\Kota::where('id','=',$cariTracking1)->first();

        $userID = Auth::user()->id;
        $data = DB::table('destinasi')
            ->join('tujuan', 'destinasi.id_destinasi', '=', 'tujuan.destinasi_id')
            ->select('*')
            ->where('user_id','=',$userID)
            ->get();
        
        $h = $data->sum('harga');

        foreach ($data as $a) {
                
        $latitudefrom = $kec->Latitude;
        $longitudefrom = $kec->longitude;

        $latitudeto = $a->Latitude;
        $longitudeto = $a->longitude;

        $theta = $longitudefrom - $longitudeto;
        $dist = sin(deg2rad($latitudefrom)) * sin(deg2rad($latitudeto)) + cos(deg2rad($latitudefrom)) * cos(deg2rad($latitudeto)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        $distance=round($miles * 1.609344);  


        // dd($distance);
            }    
        // $data = \App\Tujuan::where('user_id','=',$userID)->get();
        return view('hasiltrack',compact('kec','kot','data','distance', 'h'));
    }

}
