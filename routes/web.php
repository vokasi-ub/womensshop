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
    return view('welcome');
});

Auth::routes();

/*menampilkan halaman setelah login*/
Route::get('/home', 'HomeController@index2')->name('dashboard.dashboard');

/* menampilkan halaman atasan
Route::get('atasan', function () {
    return view('dashboard.atasan');
});
*/

/* menampilkan halaman bawahan 
Route::get('bawahan', function () {
    return view('dashboard.bawahan');
});
*/

/* menampilkan halaman sub kategori */
Route::get('subkategori', function () {
    return view('dashboard.subKategori');
});

/* menampilkan halaman produk */
Route::get('produk', function () {
    return view('dashboard.produk');
});

/* menampilkan halaman detail pesanan */
Route::get('detailpesanan', function () {
    return view('dashboard.detailpesanan');
});

/* menampilkan halaman kategori */
Route::resource('kategori', 'HomeController');
/* crud kategori */
Route::get('editkategori/{idKategori}','HomeController@edit');
Route::post('updatekategori/{idKategori}','HomeController@update');
Route::post('tambahkategori','HomeController@store');
Route::get('tambahdata','HomeController@create');
Route::get('hapuskategori/{idKategori}','HomeController@destroy');


/* menampilkan halaman subkategori */
Route::resource('subkategori', 'subKategoriController');
/* crud subkategori */
Route::get('editsub/{idSubKategori}','subKategoriController@edit');
Route::post('updatesub/{idSubKategori}','subKategoriController@update');
Route::post('tambahsub','subKategoriController@store');
Route::get('tambahdatasub','subKategoriController@create');
Route::get('hapussub/{idSubKategori}','subKategoriController@destroy');

/* menampilkan halaman produk */
Route::resource('produk', 'produkController');
/* crud subkategori */
Route::get('editproduk/{idProduk}','produkController@edit');
Route::post('updateproduk/{idproduk}','produkController@update');
Route::post('tambahproduk','produkController@store');
Route::get('tambahdataproduk','produkController@create');
Route::get('hapusproduk/{idProduk}','produkController@destroy');

/* menampilkan halaman produk */
Route::resource('detailpesanan', 'detailPesananController');
/* crud subkategori */
Route::get('editdetail/{idPesanan}','detailPesananController@edit');
Route::post('updatedetail/{idPesanan}','detailPesananController@update');
Route::post('tambahdetail','detailPesananController@store');
Route::get('tambahdatadetail','detailPesananController@create');
Route::get('hapusdetail/{idPesanan}','detailPesananController@destroy');