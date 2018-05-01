<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'description', 'status', 'employee_id', 'due_date'];

    public function employee()
    {
    	return $this->belongsTo('App\Employee');
    }
}
