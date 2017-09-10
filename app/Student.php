<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['name', 'fathers_name', 'mothers_name', 'email', 'address', 'date_of_birth', 'occupation', 'mobile', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}

