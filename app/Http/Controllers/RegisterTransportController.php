<?php

namespace App\Http\Controllers;

use App\RegisterTransport;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterTransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'address'=>['required', 'string', 'max:255'],
            'tel'=>['required', 'string', 'max:255'],
            'image'=>['required', 'string', 'max:255'],
        ]);
        //dd($data);

        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'tel' => $data['tel'],
            'image' => $data['image'],
        ]);
        $user->attachRole('transporteur');
        //User::create($data);
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RegisterTransport  $registerTransport
     * @return \Illuminate\Http\Response
     */
    public function show(RegisterTransport $registerTransport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RegisterTransport  $registerTransport
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterTransport $registerTransport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RegisterTransport  $registerTransport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterTransport $registerTransport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RegisterTransport  $registerTransport
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterTransport $registerTransport)
    {
        //
    }
}
