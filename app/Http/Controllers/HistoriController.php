<?php

namespace App\Http\Controllers;

use App\Histori;
use Illuminate\Http\Request;

class HistoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = Histori::all();
        return view('histori.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('histori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Histori::create($request->all());
        return redirect('/histori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $histori = Histori::where("id", $id)
            ->orWhere("uid", $id)
            ->latest('created_at')
            ->first();

        return response()->json($histori);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Histori::findOrFail($id);
        return view('histori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $histori = Histori::findOrFail($id);
        $histori->update($request->all());
        return redirect('/histori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Histori::findOrFail($id)->delete();
        return redirect('/histori');
    }
}
