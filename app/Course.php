<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['name','duration','description','code','sessions','topics','fees','image','user_id'];
}
