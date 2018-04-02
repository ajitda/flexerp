<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;

class Expense extends Model
{
    //use Searchable;

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
    public function expense_category()
    {
        return $this->belongsTo('App\ExpenseCategory');
    }
    public function scopeSearch($query, $s)
    {
        return $query->where('description', 'like', '%'.$s.'%');
        //->orWhere('description', 'like', '%'.$s.'%');
    }
}
