<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable=['qty', 'unit_price', 'total', 'payment', 'payment_type', 'dues', 'description', 'user_id', 'expense_category_id', 'employee_id'];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function Order_cat()
    {
        return $this->belongsTo('App\OrderCat');
    }
    public function loan()
    {
        return $this->belongsTo('App\Loan');
    }
}