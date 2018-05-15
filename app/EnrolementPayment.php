<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrolementPayment extends Model
{
    protected $fillable=['enrolement_id','account_id','amount','user_id'];
}
