<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function category()
    {
        $this->belongsTo('App\Category');
    }
}
