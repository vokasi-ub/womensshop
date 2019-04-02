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
Route::get('/home', 'HomeController@index')->name('dashboard.dashboard');



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