<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\auth;

class TransportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    public function index()
    {
        return view('admin.transport.transport');
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


        // $this->validate($request, [
        //     'name' => 'required|min:3|max:50',
        //     'email' => 'email',
        //     'vat_number' => 'max:13',
        //     'password' => 'required|confirmed|min:6',
        // ]);



        //  $this->validate($request, [
        //     'name' => 'required|min:6|max:50',
        //     'mail' => 'email',
        //     'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        //     'password_confirmation' => 'min:6'
        //     ]);
        // $trasporteur = new \App\Transport();
        // $trasporteur->name=$request->input('name');
        // $trasporteur->email=$request->input('mail');
        // $trasporteur->password=auth::hash($request->input('address'));
        // $trasporteur->name=$request->input('tel');
        // $trasporteur->name=$request->input('name');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
