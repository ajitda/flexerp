<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public static function createTransaction($transaction_type, $amount, $account_id, $description)
    {
        // make a transaction
        $transaction = new Transaction();
        $transaction->transaction_type = $transaction_type;
        $transaction->user_id = Auth::user()->id;
        $transaction->amount = $amount;
        $transaction->description = $description;
        $transaction->account_id = $account_id;
        $transaction->save();
    }
}
