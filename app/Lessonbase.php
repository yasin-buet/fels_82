<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessonbase extends Model
{
    protected $table = 'lessonbase';
    public function questions()
    {
        return $this->belongsTo('App\Question');
    }
}
