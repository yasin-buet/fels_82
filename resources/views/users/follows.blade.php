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
                            <a href="{{ URL::to('answers') }}">
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
            <div class="container">
                <h1> People You are Following </h1>>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($followings as $following)
                            <tr class="success">
                                <td>
                                    {{ $following->name }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                <h2> People To Follow </h2>>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Follow ?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($otherUsers as $user)
                        <tr class="success">
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                            {!! Form::open(['action' => 'UsersFollowsController@store']) !!}
                            {!! Form::hidden('yet_to_follow', $user->id) !!}
                            {!! Form::submit('Follow') !!}
                            {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
    <center>
        <strong><a>Developed by framgia PHP Team Ambidextrous</a></strong>
    </center>
@endsection