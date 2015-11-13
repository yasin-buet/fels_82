@extends('master')
@section('title', 'Page Title')
@section('content')
   <div class = "panel panel-primary">
    <div class = "panel-heading">
    <h1 class = "panel-title">Panel</h1>
    </div>
    <div class = "panel-body">
    {!! Form::open(['action' => 'ResultsController@store']) !!}
    @foreach($lessonbases as $lessonbase)
    {!! Form::hidden('lesson_id', $lessonbase->lesson_id) !!}
        <div class = "row">
            <div class = "col-sm-12 form">
                <h3>
                    {{ $lessonbase->question_id }}
                </h3>
                @foreach($questions as $question)
                    @if($question->id == $lessonbase->question_id)
                        <p>
                            <h1>{{ $question->english_word }}</h1>
                        </p>
                        @foreach($answers as $answer)
                            @if($answer->question_id == $question->id)
                            <input type = "checkbox" name = "check_list[]" value = "<?=$answer->id?>" />
                                <p>
                                    {{ $answer->bengali_meaning }}
                                </p>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
    {!!  Form::submit('End Exam') !!}
    {!! Form::close() !!}
    </div>
    </div>
@endsection