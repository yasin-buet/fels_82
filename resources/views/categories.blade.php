@extends('master')
@section('title', 'Page Title')
@section('content')
<div class = "panel panel-primary">
    <div class = "panel-heading">
        <h1 class = "panel-title">Panel</h1>
    </div>
    <div class = "panel-body">
        @foreach ($categories as $category)
        <div class = "row">
            <div class = "col-md-4 col-md-push-4">
                {!! Form::open(['action' => 'LessonsController@store']) !!}
                {!! Form::hidden('id', $category->id) !!}
                <h3 class = "bg-primary">
                    {{ $category->category_name }}
                </h3>
                @foreach ($questions as $question)
                @if ($question->category_id == $category->id)
                <p class = "bg-success">
                    {{ $question->english_word }}
                </p>
                @endif
                @endforeach
                {!!  Form::submit('Start Lesson')  !!}
                {!! Form::close() !!}
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
