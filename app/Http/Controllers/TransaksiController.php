<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function index()
    {

        $datas = DB::table("transaksi")
        ->select(
            "transaksi.id as id",
            "customer.nama as customer",
            "transaksi.produk_id as produk",
            "transaksi.jumlah_per_produk",
            "transaksi.subtotal_per_produk",
            "transaksi.total_harga"
        )
        ->leftjoin("customer", "transaksi.customer_id", "customer.id")
        ->orderByDesc("transaksi.created_at")
        ->get();

        return view('transaksi.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function showByCustomer($id)
    {

        $datas = DB::table("transaksi")
        ->select(
            "transaksi.id as id",
            "customer.nama as customer",
            "transaksi.produk_id as produk",
            "transaksi.jumlah_per_produk",
            "transaksi.subtotal_per_produk",
            "transaksi.total_harga"
        )
        ->leftjoin("customer", "transaksi.customer_id", "customer.id")
          ->where('transaksi.customer_id', $id)
        ->orderByDesc("transaksi.created_at")
        ->get();
            
        return view('transaksi.index', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Transaksi::find($id)->update([
            'customer_id' => $request->get('customer_id'),
            'produk_id' => $request->get('produk_id'),
            'subtotal_per_produk' => $request->get('subtotal_per_produk'),
            'jumlah_per_produk' => $request->get('jumlah_per_produk'),
            'total_harga' => $request->get('total_harga')
        ]);

        $datas = Transaksi::get();
        return redirect('/transaksi');
    }


    public function destroy($id)
    {
        Transaksi::find($id)->delete();
        return redirect('/transaksi');
    }
}
