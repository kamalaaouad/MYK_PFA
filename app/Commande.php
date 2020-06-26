<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    //
    public function products(){
        return $this->belongsToMany(product::class)->withTimestamps()->withPivot(['quantity']);
    }

    public function delivery(){
        return $this->hasOne('App\Delivery','foreign_key');
    }
}
