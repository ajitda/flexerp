<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderCat extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    public function order()
    {
    	return $this->hasMany('App\Order');
    }
}
