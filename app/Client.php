<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
