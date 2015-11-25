<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function lessonbase()
    {
        return $this->hasOne('App\Lessonbase');
    }
    public function lessons()
    {
        return $this->belongsToMany('App\Lesson', 'lessonbase', 'question_id', 'lesson_id');
    }
}