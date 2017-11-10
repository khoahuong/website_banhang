<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";

    public function bills(){
    	return $this->hasMany('App\Bill', 'id_customer', 'id');
    }
}
