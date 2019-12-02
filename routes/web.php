<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('beranda');
});

// Route::get('/bayar-sekarang', function () {
//     return view('user.bayar-sekarang');
// });


Route::get('/user-home', function () {
    return view('user.layouts.index');
});


Route::get('/home-mitra', function () {
    return view('mitra.layouts.index');
});

Route::get('/home-admin', function () {
    return view('admin.layouts.index');
});

Route::get('/mitra', function () {
    return view('mitra.daftar-mitra');
});

Route::get('/rekom', function () {
    return view('rekom');
});



Route::post('/cari-rekom','WisataController@cari');

Route::get('/rekom','WisataController@provinsi');

// Route::get('/json-provinsi/','WisataController@provinsi');

Route::get('/json-kota/','WisataController@kota');



Route::post('/hasil-tracking','TrackingController@carii');

Route::get('/tracking','TrackingController@kota');

// Route::get('/json-kota/','TrackingController@kota');

Route::get('/json-kecamatan/','TrackingController@kecamatan');




Route::get('/detail-lokasi/{id}','TujuanController@map');

Route::get('/test','IndexController@map');

// Route::get('/beranda','indexController@provinsi');

// Route::get('/json-provinsi/','indexController@provinsi');

Route::get('/pilihLokasi','indexController@delete');


Route::get('/map',function(){
    return view ('map');
});

Route::get('/paket',function(){
    return view ('paket');
});

Route::post('/postRegister','AuthController@create');

Route::group(['middleware' => ['auth','checkRole:admin,pengunjung,mitra']], function(){

Route::get('/index','AuthController@role');

Route::get('/logout','AuthController@logout');

});

Route::group(['middleware' => ['auth','checkRole:mitra']], function(){

Route::get('/pencari-travel','TripController@pencariTravel');

Route::get('/detail-penjemputan/{id}','TripController@detailJemput');

});    

Route::group(['middleware' => ['auth','checkRole:admin']], function(){

Route::post('/verif-mitra','IndexController@verifMitra');

Route::get('/paket-wisata','TujuanController@getPaket');

Route::get('/tambah-paket','TujuanController@buatPaket');

Route::post('/tambahkan-paked','TujuanController@addPaket');

Route::get('/bukti-pembayaran','PembayaranController@adminDisplay');

Route::post('/verif-bukti-sekarang','PembayaranController@accBukti');

Route::post('/jangan-verif-bukti-sekarang','PembayaranController@tolakBukti');

});


Route::get('/login','AuthController@index');

Route::post('/postlogin','AuthController@postlogin');

Route::get('/logout','AuthController@logout');

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/tambah-wisata', function () {
    return view('admin/tambah-wisata');
});


Route::get('/lihatwisata','IndexController@show');

Route::get('/req-pelanggan','IndexController@show2');

Route::get('/data-pelanggan','IndexController@showw');

Route::get('/req-mitra','IndexController@show3');

Route::get('/data-mitra','IndexController@showw3');


Route::group(['middleware' => ['auth','checkRole:pengunjung']], function(){

Route::get('/bayar-sekarang/{id}','PembayaranController@uploadBukti');

Route::get('/edit-pembayaran/{id}','PembayaranController@editBukti');

Route::post('/edit-bukti-bayar','PembayaranController@updateBukti');

Route::post('upload-bukti-bayar','PembayaranController@storeBukti');    

Route::get('/pesanan-anda','PembayaranController@index');

// Route::get('/view-wisata','IndexController@index');

Route::post('/tambah-tujuan','TujuanController@create');

Route::get('/tujuan','TujuanController@Show');

Route::post('/pesan-travel-sekarang','TripController@bookNow');

Route::get('/mulai-trip','TripController@index');

Route::get('/detail-wisata/{id}','TripController@detailWisata');

// Route::get('/tujuan','TujuanController@Sum');




});

// Route::get('/our_outlets', 'OutletMapController@index')->name('outlet_map.index');
// Route::resource('outlets', 'OutletController');

Route::get('/form',function(){
    return view ('form');
});



Route::post('/mitra','IndexController@create');

Route::post('/rekomendasi','LokasiController@create');

Route::post('/kirim-data','VerifikasiController@create');

Route::get('/tambah-wisata','IndexController@provinsi');

Route::post('/tambahWisata','IndexController@create2');