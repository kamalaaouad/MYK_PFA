<?php

namespace App\Http\Controllers;

use App\Card;
use App\Http\Controllers\Controller;
use App\product;
use Illuminate\Http\Request;

class CardController extends Controller
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
        //
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


    public function addToCart(Product $product) {

        if (session()->has('card')) {
            $card = new Card(session()->get('card'));
        } else {
            $card = new Card();
        }
        $card->add($product);
        //dd($cart);
        session()->put('card', $card);
        return redirect()->back();
    }

    public function viewCart() {
        //$products=product::all();
        if (session()->has('card')) {
            $card = new Card(session()->get('card'));
        } else {
            $card = null;
        }

        return view('carts.cart', compact('card'));
    }
    public function checkout($montant){

        if (session()->has('card')) {
            $card = new Card(session()->get('card'));
        } else {
            $card = null;
        }
        return view('carts.checkout',compact('montant','card'));
    }

    public function deletecart(Request $request,$id_product){

        $card=session()->get('card');
        foreach ($card->items  as   $itm)
        {

            if($itm['id'] == $id_product){
                unset(session()->get('card')->items[$id_product]);
                $card->totalQty = $card->totalQty - $itm['quantity'] ;
                $card->alltva-=($itm['TVA']*$itm['quantity']);
                $card->totalPrice = $card->totalPrice - $itm['price'] * $itm['quantity'];
                $card->TTC_totale -= (($itm['price'] * $itm['quantity'])+($itm['price'] * $itm['quantity']*$itm['TVA'])-($itm['discount']* $itm['quantity']));
            }
        }
        //$this->addToCart();

        session()->put('card',$card);

        return redirect()->back();
    }
    public function UpdateQtt(Request $request,$id_qtt){
        $newqtty=$request->input('update_qtt');
        $card=session()->get('card');
        foreach ($card->items  as   $itm)
        {

            if($itm['id'] == $id_qtt){
                $qtty=$newqtty-$itm['quantity'];
               $card->items[$id_qtt]['quantity']=$newqtty;
               $card->items[$id_qtt]['price_Unit']+=(($itm['price'] * $qtty)+($itm['price'] * $qtty*$itm['TVA']));
                $card->totalQty = $card->totalQty +($qtty);
                $card->totalPrice =( $card->totalPrice +( $itm['price'] * $qtty));
                $card->TTC_totale += (($itm['price'] * $qtty)+($itm['price'] * $qtty*$itm['TVA'])+($itm['discount']*$qtty));
                $card->alltva+=($itm['TVA']*$qtty);
                break;
            }
        }
        session()->put('card',$card);

        return redirect()->back();
    }
}
