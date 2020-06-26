<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    //
    public function commande(){
        return $this->belongsTo('App\Commande','foreign_key');
    }
}
