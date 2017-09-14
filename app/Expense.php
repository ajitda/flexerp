<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable=['qty', 'unit_price', 'total', 'payment', 'dues', 'description', 'user_id', 'expense_category_id', 'employee_id'];

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function Order_cat()
    {
        return $this->belongsTo('App\OrderCat');
    }
}
