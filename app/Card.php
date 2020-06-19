<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    public $items = [];
    public $totalQty;
    public $totalPrice;
    public $PriceHorstx;
    public $alltva;
    public $totdiscount;

    public function __Construct($card = null)
    {
        if ($card) {

            $this->items = $card->items;
            $this->totalQty = $card->totalQty;
            $this->totalPrice = $card->totalPrice;
            $this->PriceHorstx=$card->PriceHorstx;
            $this->alltva=$card->alltva;
            $this->totdiscount=$card->totdiscount;
        } else {

            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
            $this->PriceHorstx=0;
            $this->alltva=0;
            $this->totdiscount=0;
        }
    }

    public function add($product)
    {
        $item = [
            'id'=>$product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 0,
            'stock'=>$product->quantity,
            'TVA'=>$product->TVA,
            'discount'=>$product->discount,
            'image' => $product->image,
        ];

        if (!array_key_exists($product->id, $this->items)) {
            $this->items[$product->id] = $item;
            $this->totalQty += 1;
            $this->totalPrice += $product->price;
            $this->alltva +=$product->TVA;
            $this->totdiscount +=$product->discount;
            $this->PriceHorstx=($this->totalPrice + $this->alltva - $this->totdiscount);

        } else {

            $this->totalQty += 1;
            $this->totalPrice += $product->price;
            $this->alltva +=$product->TVA;
            $this->totdiscount +=$product->discount;
            $this->PriceHorstx=($this->totalPrice + $this->alltva - $this->totdiscount);
        }

        $this->items[$product->id]['quantity'] += 1;

    }




}
