<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrolement extends Model
{
    protected $fillable= ['qty','price', 'discount', 'comment', 'total', 'student_id', 'course_id'];
}
