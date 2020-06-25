<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded=[];


    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    /*public function commandes(){
        return $this->belongsToMany('App\Commande','commande_product','product_id','commande_id')->withTimestamps()->withPivot( 'quantity');
    }

    public function commande_product(){
        return $this->hasMany('App\CommandeProduct');
    }*/
}
