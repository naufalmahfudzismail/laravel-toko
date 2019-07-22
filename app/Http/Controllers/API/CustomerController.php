<?php

namespace App\Http\Controllers\API;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Customer::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responseø
     */
    public function store(Request $request)
    {

        //regis

        $customer = $request->all();
        $cust = Customer::create([
            'email' => $customer['email'],
            'password' => Hash::make($customer['password']),
            'nama' => $customer['nama'],
            'saldo' => $customer['saldo']
        ]);
        
        if($cust){
             return response()->json([
         "error" =>  false
            ]
            );
        }
        
        else{
                 return response()->json([
         "error" =>  true
            ]
            );
        }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
     
    public function show($id){
         
         $data = Customer::findOrFail($id);
         return response()->json($data);
         
     }
    public function login(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $log_email = Customer::where('email', $email)->count();

        if ($log_email == null || $log_email == 0) {
            $message = "Email anda tidak terdaftar !";
            $berhasil = false;
            $id = null;
        } else {
            $log_pass = Customer::select('id', 'password')->where('email', $email)->first();
            $check = Hash::check($password, $log_pass->password);

            if ($check) {
                $message = "Silahkan masuk";
                $berhasil = true;
                $id = $log_pass->id;
            } else {
                $message = "Password salah !";
                $berhasil = false;
                $id = null;
            }
        }
        return response()->json([
            "message" => $message,
            "error" => !$berhasil,
            "id" => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Customer::findOrFail($id);
        return view('customer.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id)->update([
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'saldo' => $request->get('saldo')
        ]);


      if($customer){
             return response()->json([
         "error" =>  false
            ]
            );
        }
        
        else{
                 return response()->json([
         "error" =>  true
            ]
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Customer::find($id)->delete();
         if($del){
             return response()->json([
         "error" =>  false
            ]
            );
        }
        
        else{
                 return response()->json([
         "error" =>  true
            ]
            );
        }
    }
}
