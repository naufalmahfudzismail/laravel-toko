<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BukuModel;
use DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datas = BukuModel::get();
      return view('buku.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BukuModel::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BukuModel::findOrFail($id);
        return view('buku.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        BukuModel::find($id)->update([
          'judul' => $request->get('judul'),
          'pengarang' => $request->get('pengarang'),
          'tahun' => $request->get('tahun'),
          'alamat' => $request->get('alamat'),
          'cetakan' => $request->get('cetakan'),
          'penerbit' => $request->get('penerbit'),
          'harga' => $request->get('harga'),
        ]);
        $datas = BukuModel::get();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      BukuModel::find($id)->delete();
      return redirect('/');
    }
}
