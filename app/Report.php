<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function scopeSearch($query, $s)
    {
        return $query->where('orders', 'like', '%'.$s.'%');
        //->orWhere('description', 'like', '%'.$s.'%');
    }
}
