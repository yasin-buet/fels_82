@extends('master')
@section('title', 'Page Title')
@section('content')
<div class="row">
    <div class="col-md-4">
        <img src="b.jpg" alt="avatar" class="img-thumbnail">
    </div>
    <div class="col-md-4">
        <strong>
            <mark>
                <h2>
                    <a href="{{ URL::to('words') }}">Words</a>
                </h2>
            </mark>
        </strong>
    </div>
    <div class="col-md-4">
        <strong>
            <mark>
                <h2>
                    <a href="{{ URL::to('lessons') }}">Lessons</a>
                </h2>
            </mark>
        </strong>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <h3>
            @if (Auth::check())
                {{ Auth::user()->name }}
            @endif
        </h3>
    </div>
</div>
@endsection