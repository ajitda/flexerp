<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrolement extends Model
{
    protected $fillable= ['qty','price', 'discount', 'comment', 'total', 'payment', 'dues', 'payment_type', 'student_id', 'course_id'];

    public function student()
    {
        return $this->belongsTo('App\Student');
    }
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
}

