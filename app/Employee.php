<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable =['name', 'fathers_name', 'mothers_name', 'email', 'address', 'date_of_birth', 'mobile', 'designation', 'image', 'degree', 'nid', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
