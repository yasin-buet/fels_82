<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function scopeCorrect($query)
    {
        return $query->whereIsCorrect(1);
    }
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
