@extends('master')
@section('title', 'Page Title')
@section('content')
    <div class = "panel panel-primary">
        <div class = "panel-heading">
            <h1 class = "panel-title">Panel</h1>
        </div>
        <div class = "panel-body">
        {!! Form::open(['action' => 'AnswersController@store']) !!}
            {!! Form::hidden('lesson_id', $selectedId) !!}
            <div class = "row">
                <div class = "col-sm-12 form">
                    @foreach ($questions as $question)
                        <p>
                            <h1>{{ $question->english_word }}</h1>
                        </p>
                        @foreach ($answers as $answer)
                            @if ($answer->question_id == $question->id)
                                {!! Form::checkbox('check_list[]', $answer->id) !!}
                                    <p>
                                        {{ $answer->bengali_meaning }}
                                    </p>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
            {!! Form::submit('End Exam') !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection