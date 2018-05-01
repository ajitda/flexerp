<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function scopeSearch($query, $s)
    {
        return $query->where('terms', 'like', '%'.$s.'%');
        //->orWhere('description', 'like', '%'.$s.'%');
    }
}
