<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['transaction_type', 'amount', 'description', 'account_id', 'user_id'];

    public function account(){
        return $this->belongsTo('App\Account');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function scopeSearch($query, $s)
    {
        return $query->where('description', 'like', '%'.$s.'%');
        //->orWhere('description', 'like', '%'.$s.'%');
    }
}
