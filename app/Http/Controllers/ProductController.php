<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.product',['products'=>Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.addProduct',['brands'=>\App\brand::all(),'categories'=>\App\Category::all()]);
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
            'name'=>'required',
            'description'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'TVA'=>'required',
            'image'=>'required',
            'brand_id'=>'required',
            'category_id'=>'required',
        ]);

        product::create($data);
        $request->session()->flash('status','Bien Enregisté');
        return redirect()->route('product.index');
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
        $product = Product::findOrFail($id);
        return view('admin.product.editProduct',['product'=>$product,'categories'=> \App\Category::all(),'brands'=>\App\Brand::all()]);
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
        $product=product::findOrFail($id);

        $data=$request->validate([
            'name'=>'required',
            'description'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'TVA'=>'required',
            'image'=>'required',
            'brand_id'=>'required',
            'category_id'=>'required',
        ]);

        $product->update($data);
        $request->session()->flash('status','Bien Modifié');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product=product::findOrFail($id);
       $product->delete();
        return redirect()->route('product.index');
    }
}
