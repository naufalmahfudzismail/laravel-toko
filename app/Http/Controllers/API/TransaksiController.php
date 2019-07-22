<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\DB;
use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datas = DB::table("transaksi")
            ->select(
                "transaksi.id as id",
                "customer.nama as customer",
                "transaksi.produk_id as produk",
                "transaksi.jumlah_per_produk",
                "transaksi.subtotal_per_produk",
                "transaksi.total_harga",
                "transaksi.created_at as tanggal"
            )
            ->leftjoin("customer", "transaksi.customer_id", "customer.id")
            ->orderByDesc("transaksi.created_at")
            ->get();

        return response()->json($datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cust = Transaksi::create($request->all());
        if ($cust) {
            return response()->json(
                [
                    "error" =>  false
                ]
            );
        } else {
            return response()->json(
                [
                    "error" =>  true
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function showByCustomer($id)
    {

        $data = DB::table("transaksi")
            ->select(
                "customer.nama as customer",
                "transaksi.produk_id as produk",
                "transaksi.jumlah_per_produk",
                "transaksi.subtotal_per_produk",
                "transaksi.total_harga",
                "transaksi.created_at as tanggal"
            )
            ->leftjoin("customer", "transaksi.customer_id", "customer.id")
            ->where("transaksi.customer_id", $id)
            ->orderByDesc("transaksi.created_at")
            ->get();

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
