<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable= ['qty', 'unit_price', 'discount', 'total', 'payment', 'dues', 'type', 'description', 'user_id', 'order_cat_id', 'employee_id', 'reference_id', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    public function reference()
    {
        return $this->belongsTo('App\Reference');
    }
    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
    public function Order_cat()
    {
        return $this->belongsTo('App\OrderCat');
    }

    public function scopeSearch($query, $s)
    {
        return $query->where('description', 'like', '%'.$s.'%');
    }
}
