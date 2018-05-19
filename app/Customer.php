<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable =['name', 'designation', 'company', 'email', 'address', 'mobile', 'image', 'user_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function scopeSearch($query, $s)
    {
        return $query->where('name', 'like', '%'.$s.'%')->orWhere('email', 'like', '%'.$s.'%');
    }
}
