<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Laravel\Scout\Searchable;

class Course extends Model
{
//    use Searchable;

    protected $fillable=['name','duration','description','code','sessions','topics','fees','image','user_id'];

//    public function searchableAs()
//    {
//        return 'name';
//    }

}
