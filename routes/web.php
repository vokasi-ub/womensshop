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

/* menampilkan halaman kategori */
Route::get('kategori', function () {
    return view('dashboard.kategori');
});

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