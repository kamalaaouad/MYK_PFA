<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    public $items = [];
    public $totalQty;
    public $totalPrice;
    public $TTC_totale;
    public $TTC_p_Pro;
    public $alltva;
    public $totdiscount;

    public function __Construct($card = null)
    {
        if ($card) {

            $this->items = $card->items;
            $this->totalQty = $card->totalQty;
            $this->totalPrice = $card->totalPrice;
            $this->TTC_totale=$card->TTC_totale;
            $this->TTC_p_Pro=$card->TTC_p_Pro;
            $this->totdiscount=$card->totdiscount;
            $this->alltva=$card->alltva;
        } else {

            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
            $this->TTC_totale=0;
            $this->TTC_p_Pro=0;
            $this->totdiscount=0;
            $this->alltva=0;
        }
    }

    public function add($product)
    {
        $item = [

            'id'=>$product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 0,
            'price_Unit'=>(ceil(($product->price+($product->price*$product->TVA))*(1-$product->discount))),
            'stock'=>$product->quantity,
            'TVA'=>$product->TVA,
            'discount'=>$product->discount,
            'image' => $product->image,
        ];

        if (!array_key_exists($product->id, $this->items)) {
            $this->items[$product->id] = $item;
            $this->totalQty += 1;
            $this->totalPrice += (ceil($product->price * ((1+$product->TVA)-$product->discount)));
            $this->alltva+=$product->TVA;
            $this->TTC_p_Pro =($product->price*((1+$product->TVA)-$product->discount));
            $this->totdiscount +=$product->discount;
            $this->TTC_totale+=ceil($product->price*((1+$product->TVA)-$product->discount*$product->price));

        } else {

            $this->totalQty += 1;
            $this->totalPrice += (ceil($product->price * ((1 +$product->TVA)-$product->discount)));
            $this->alltva+=$product->TVA;
            $this->TTC_p_Pro =ceil($product->price * ((1+$product->TVA)-$product->discount));
            $this->totdiscount +=$product->discount;
            $this->TTC_totale+=ceil($product->price * ((1+$product->TVA)-$product->discount));
        }

        $this->items[$product->id]['quantity'] += 1;

    }




}
