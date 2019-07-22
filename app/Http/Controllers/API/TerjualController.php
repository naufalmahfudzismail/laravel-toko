<?php

namespace App\Http\Controllers\API;

use App\Terjual;
use Illuminate\Http\Request;

class TerjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  =  Terjual::all();
        return response()->json($data);
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
        $data = Terjual::create($request->all());
        
        if($data){
            return response()->json([
                "error" => false]);
        }
        else{
             return response()->json([
                "error" => true]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Terjual  $terjual
     * @return \Illuminate\Http\Response
     */
    public function show(Terjual $terjual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Terjual  $terjual
     * @return \Illuminate\Http\Response
     */
    public function edit(Terjual $terjual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Terjual  $terjual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terjual $terjual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Terjual  $terjual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terjual $terjual)
    {
        //
    }
}
