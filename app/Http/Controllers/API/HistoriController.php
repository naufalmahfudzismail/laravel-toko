<?php

namespace App\Http\Controllers\API;

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
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = Histori::create($request->all());
        if ($create) {
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
    public function edit(Histori $histori)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Histori  $histori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Histori::findOrFail($id)->delete();
        return response()->json($delete);
    }
}
