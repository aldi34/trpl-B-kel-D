<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create(Request $req)
    {
    	if ($req->password1 !== $req->password2) {
    		return redirect()->back();
    	}else{
	 		$u = new \App\User;
	 		$u->id = mt_rand(1000,9999);
	 		\App\Pengunjung::create([
	 			'id' => mt_rand(1000,9999),
	 			'user_id' => $u->id,
	 			'nama_lengkap' => $req->nama_lengkap,
	 			'no_ktp' => $req->ktp,
                'email' => $req->email,
                'no_telp' => $req->notelp,
	 			'jenis_kelamin' => $req->gender 			
	 		]);
	 		$u->role = 'pengunjung';
	 		$u->name = $req->nama_lengkap;
	 		$u->email = $req->email;
	 		$u->password = bcrypt($req->password2); 
	 		$u->save();   	
    	return redirect('/login');
    }
    }
    public function index()
    {
    	return view('auth.login');
    }
    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/index');
    	}
    	return 'Password Salah';
    }
    public function logout()
    {
        Auth::logout();
        return view('beranda');
    }
    public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'admin') {
            return redirect('/home-admin');
        }else if (Auth()->user()->role == 'pengunjung') {
            return view('user.homeuser');
        }else if (Auth()->user()->role == 'mitra') {
            return view('user.homeuser');
        }

    }
}
