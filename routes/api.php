<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(
    [
        'produk' => 'API\ProdukController',
        'customer' => 'API\CustomerController',
        'transaksi' => 'API\TransaksiController',
        'terjual'=> "API\TerjualController",
        'histori' => "API\HistoriController"
    ]
);

Route::get("/produk/kode/{code}", "API\ProdukController@showByCode");
Route::get("/transaksi/customer/{id}", "API\TransaksiController@showByCustomer");
Route::get("/customer/{id}", "API\CustomerController@show");
Route::post("/customer/login", "API\CustomerController@login");
