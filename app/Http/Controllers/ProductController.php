<?php

namespace App\Http\Controllers;
use App\Card;
use App\product;
use App\brand;
use App\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Collection;

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


    public function __construct()
    {

        $this->middleware('role:superadministrator')->except('getByCategory','getByBrand','searchByName','txt');

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

    public function discount($id){

        return view('admin.product.discount',['toEdit'=>Product::find($id)]);
    }

    public function addToCart(Product $product) {

        if (session()->has('card')) {
            $card = new Card(session()->get('card'));
        } else {
            $card = new Card();
        }
        $card->add($product);
        //dd($cart);
        session()->put('card', $card);
        return redirect('index');
    }

    public function showCart() {
        $products=Product::all();
        if (session()->has('card')) {
            $card = new Card(session()->get('card'));
        } else {
            $card = null;
        }

        return view('index', compact('card','products'));
    }

    public function getByCategory($id){
        return view('shop',['products'=>Product::where('category_id',$id)->get() ,'categories'=>category::all(),'brands'=>brand::all()]);
    }

    public function getByBrand($id){
        //dd(Product::where('brand_id',$id)->get());
        return view('shop',['products'=>Product::where('brand_id',$id)->get() ,'categories'=>category::all(),'brands'=>brand::all()]);
    }

    public function searchByName(Request $request){
        $searched = $request->input('search');

        //dd($searched);
        $products = product::where('name','like','%'.$searched.'%')->get();
        $products2= product::whereHas('category', function($q) use ($searched) { $q->where('name','like','%'.$searched.'%');})->get();
        $products3= product::whereHas('brand', function($q) use ($searched) { $q->where('name','like','%'.$searched.'%');})->get();

        $products = $products->merge($products2);
        $products = $products->merge($products3);
        //dd($products1);
        //dd($products1);
        $categories=category::all();
        $brands=brand::all();

        return view('shop',compact('products','categories','brands'));

    }

    public function getByPrice(Request $request){
        $limits = explode('-',$request->input('price_filter'));
        $min = (int)substr($limits[0], 1); // eliminer le $ au debut d'ou '1'
        $max = (int)substr($limits[1], 2); // eliminer l'espace et le $ au debut d'ou '2'
        //dd($min ,$max );
        //$products = DB::select('select * from products where (price*(1+TVA))*(1-discount) between :min and :max', ['min'=>$min,'max'=>$max]);
        //dd($products);
        $data =product::all();
        foreach ($data as $item){
            if(($item->price*(1+$item->TVA) * (1-$item->discount)) >= $min and ($item->price*(1+$item->TVA) * (1-$item->discount)) <= $max ){
                $products[] = $item;
            }
        }

        return  view('shop',['products'=>$products,'categories'=>category::all(),'brands'=>brand::all()]);
    }





    public function txt()

    {
        $collection = collect(product::all());
        $sorted = $collection->sortByDesc('updated_at');
        return view('index',['products'=>$sorted->all()]);

       // dd($sorted);
    }


        public function discountEdit(Request $request){
            $product = product::find($request->input('id'));
            $product->discount = floatval($request->input('discount')) / 100 ;
            $product->save();
            return view('admin.product.product',['products'=>Product::all()]);

        }
}
