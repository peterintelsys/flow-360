<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    
}
