<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function category()
    {
        $this->belongsTo('App\Category');
    }
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_lessons', 'lessson_id', 'user_id');
    }
    public function questions()
    {
        return $this->belongsToMany('App\Question', 'lessonbase', 'lesson_id', 'question_id');
    }
    public function userLessons()
    {
        return $this->hasMany('App\UserLesson');
    }
    public function lessonbases()
    {
        return $this->hasMany('App\Lessonbase');
    }
}
