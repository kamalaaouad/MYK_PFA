<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    //
    public function products(){
        return $this->hasMany('App\Product');
    }
}
