<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function totalOrders(){
    	
    	return $this->orders()->sum('summary');
    }
}
