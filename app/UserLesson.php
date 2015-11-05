<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLesson extends Model
{
    protected $table = 'user_lessons';
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function lesson()
    {
        return $this->belongsTo('App\Lesson');
    }
}
