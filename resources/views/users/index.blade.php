@extends('master')
@section('title', 'Page Title')
@section('content')
{!! Html::style('css/stylesheet.css') !!}
    <div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <img src="w.jpg" class="img-responsive" alt="">
                </div>
                <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                        {{ Auth::user()->name }}
                </div>
                <div class="profile-usertitle-job">
                </div>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="{{ URL::to('users') }}">
                            <i class="glyphicon glyphicon-home"></i>
                            Overview </a>
                        </li>
                        <li>
                            {!! Form::open(['action' => 'UsersFollowsController@index', \Auth::user()->id, 'method' => 'GET']) !!}
                                <i class="glyphicon glyphicon-user"></i>
                            {!! Form::submit('Other Learners') !!}
                            {!! Form::close() !!}
                        </li>
                        <li>
                            <a href="{{ URL::to('answers') }}" >
                            <i class="glyphicon glyphicon-ok"></i>
                            Progress </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('helps') }}">
                            <i class="glyphicon glyphicon-flag"></i>
                            Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
               content for overview
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <center>
        <strong><a>Developed by Framgia PHP Team Ambidextrous </a></strong>
    </center>
@endsection
