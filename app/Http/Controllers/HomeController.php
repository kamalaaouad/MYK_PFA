<?php

namespace App\Http\Controllers;
use App\product;
use Auth;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class   HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$products=Product::all(); ,'products'
        //return view('index');
        $products=Product::all();
        return view('test',compact('products'));
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->forget('card');
        session()->flash('message','goodbye Mr');
        return redirect('/index')->with("data",session()->get('message'));
    }
    public function edit(){
        return view('home');
    }

    // public function shop(){
    //     return view('shop');
    // }
}
