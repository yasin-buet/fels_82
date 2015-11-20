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
use DB;
use App\UserLesson;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $selectedId = 0;
        $categoryId = $request->input('id');
        $userId = \Auth::user()->id;
        $lessons = Category::find($categoryId)->lessons->lists('id');
        $userLearnedLessons = UserLesson::whereuserId($userId)->where('score', '>', 0)->lists('lesson_id');
        $selectedId = Lesson::wherecategoryId($categoryId)->whereNotIn('id', $userLearnedLessons)->first()->id;
        $questionCollection = Lessonbase::wherelessonId($selectedId)->lists('question_id');
        $questions = Question::whereIn('id', $questionCollection)->get();
        $answers = Answer::whereIn('question_id', $questionCollection)->get();
        return view('lessons', compact('selectedId', 'questions', 'answers'));
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
