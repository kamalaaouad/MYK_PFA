<?php

namespace App\Http\Controllers;

use App\Mail\contactmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactcontroller extends Controller
{
    //
      public function create()
    {
        return view('contact.create');
    }

     public function store(Request $request)
    {
         //dd(request()->all());
        $data =request()->validate([
            "name"=>"required|min:3|max:9",
            "email"=>"required|email",
            "message"=>"required|min:3|max:100"
        ]);
         //dd($data);
         Mail::to('Myk@gmail.com')->send(new contactmail($data));
        
        return redirect('contact');
    }

}
