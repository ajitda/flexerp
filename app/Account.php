<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
protected  $fillable=['name', 'company', 'branch', 'balance', 'user_id', 'status'];
}
