<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    protected $fillable = ['amount', 'order_id', 'account_id', 'comments'];
}
