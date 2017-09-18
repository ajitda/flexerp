<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable=['name', 'amount', 'interest', 'installment_qty', 'installment', 'payment_date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
