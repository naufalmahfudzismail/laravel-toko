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
//
Route::get('/', 'ProdukController@index');


Route::resource('produk', 'ProdukController');
Route::resource('customer', 'CustomerController');
Route::resource('transaksi', 'TransaksiController');
Route::resource('histori', 'HistoriController');
