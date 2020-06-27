<?php

namespace App\Http\Controllers;

use App\Commande;
use App\Delivery;
use App\Http\Controllers\Controller;
use App\product;
use Illuminate\Http\Request;
use Auth;

class CommandeController extends Controller
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
    //dd($request->input('address'));
        $ids=unserialize($request->input('products_id'));
        $quantities=unserialize($request->input('products_quantity'));


        // remplissage de la commande
        $commande = new Commande();
        $commande->user_id = auth::user()->id;
        $commande->paid = true ;
        $commande->amount = $request->input('MHD') ;
        $commande->save();

        // remplissage de ligne de commande ( commande_product )
        $products = product::findMany($ids);
        //dd($products);
        for($i = 0;$i<count($ids);$i++){
            $commande->products()->attach($products[$i],['quantity'=>$quantities[$i]]);
        }

        // remplissage de delivery table

        $delivery = new Delivery();
        $delivery->description = "Livraison d'une commande de ".auth::user()->name;
        $delivery->state ='non livrée' ;
        $delivery->delivery_option =$request->input('type');
        $delivery->address = $request->input('address') ;
        $delivery->price = $request->input('pxde') ;
        $delivery->commande_id = $commande->id;
        $delivery->save();

        session()->forget('card');
        $products=Product::all();
        return view('index',compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        //
    }

    public function facture(Request $request){
        $data=$request->validate([
           // 'nom'=>'required | min:4 |max:8',
            //'prenom'=>'required | min:3 | max:14',
           // 'user_name'=>'required | min:5 | max:20',
            'email'=>'required | email',
            'address1'=>'required | min:10 | max:200',
           // 'select_pays'=>'required',
            //'select_ville'=>'required',
            //'code_postale'=>'required | numeric',
            //'verifyaddress'=>'string',
            //'save'=>'string',
            'paymentMethod'=>'required | string',
            //'namecart'=>'required | string',
            //'numbercart'=>'required | numeric',
           // 'exp'=>'required | numeric',
           // 'ccv'=>'required | numeric',
            'shipping-option'=>'required ',
        ]);
       // dd($data);
        $tabledata['address']=$data['address1'];

        $card=session()->get('card');
        if($data['shipping-option']=="Standard Delivery"){
            $amount=$card->TTC_totale;
            $pxde=0;
            $tabledata['amount']=$amount;
            $tabledata['pxde']=$pxde;
            $tabledata['type']=$data['shipping-option'];

        }elseif ($data['shipping-option']=="Express Delivery"){
            $pxde=25;
            $amount=$card->TTC_totale+$pxde;
            $tabledata['amount']=$amount;
            $tabledata['pxde']=$pxde;
            $tabledata['type']=$data['shipping-option'];
        }elseif ($data['shipping-option']=="OneDay Delivey"){
            $pxde=50;
            $amount=$card->TTC_totale+$pxde;
            $tabledata['amount']=$amount;
            $tabledata['pxde']=$pxde;
            $tabledata['type']=$data['shipping-option'];
        }
        foreach ($card->items as $item){
            $tableid[]=$item['id'];
        }
        foreach ($card->items as $item){
            $tablequntity[]=$item['quantity'];
        }
        $tabledata['id_product']=$tableid;
        $tabledata['quantity_by_product']=$tablequntity;
        $tabledata['PHT']=$card->TTC_p_Pro;
        $tabledata['tva']=$card->alltva;
        $tabledata['dis']=$card->totdiscount;
        $tabledata['MHD']=$card->TTC_totale;

        // dd($tabledata);
      //  $card->TTC_totale+=$data['shipping-option'];
        //dd($card->TTC_totale);
        return view('commandes.index',compact('tabledata'));
    }
}
