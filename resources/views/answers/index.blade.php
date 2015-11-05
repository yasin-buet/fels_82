@extends('master')
@section('title', 'Page Title')
@section('content')
<div class="col-md-3">
</div>
<div class="col-md-7">
    <div class="profile-content">
        <table class="table">
            <thead>
                <tr>
                    <th>Your Words</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questionsCorrespondingToLesson as $q)
                <tr class="success">
                    <td>
                        {{ $q->english_word }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
@section('footer')
    <center>
        <strong><a>Developed by Framgia PHP Team Ambidextrous </a></strong>
    </center>
</div>
@endsection
