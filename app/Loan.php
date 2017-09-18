<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable=['name', 'amount', 'interest', 'installment_qty', 'installment', 'payment_date', 'user_id', 'expense_category_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function expense_category(){
        return $this->belongsTo('App\ExpenseCategory');
    }
}
