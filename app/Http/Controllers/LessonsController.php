<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Lesson;
use App\Lessonbase;
use App\Question;
use App\User;
use App\Answer;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    if (\Auth::check()){
        $_selectedId = 0;
        $id = $request->input('id');
        $users = User::where('name', '=', \Auth::user()->name)->get();
        foreach($users as $user)
        {
            $_userId = $user->id;
        }
        $questions = Question::where('category_id', '=', $id)->get();
        foreach($questions as $question)
        {
            $lessonbases = Lessonbase::where('question_id', '=', $question->id)->get();
            foreach($lessonbases as $lessonbase)
            {
                $lessons = Lesson::all();
                foreach($lessons as $lesson)
                {
                    if ($lesson->lesson_id == $lessonbase->lesson_id){
                        if ($lesson->user_id == $_userId){
                            if ($lesson->score == 0) $_selectedId = $lesson->lesson_id;
                        }
                    }
                }
            }
        }
        if ($_selectedId == 0)
        {
            $_selectedId = 1;
        }
        $lessonbases = Lessonbase::where('lesson_id', '=', $_selectedId)->get();
        $questions = Question::all();
        $answers = Answer::all();
        return view('lessons', compact('lessonbases', 'questions', 'answers'));
    }
    else echo "not logged in";
}



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
