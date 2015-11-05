@extends('master')
@section('title', 'Page Title')
@section('content')
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-2">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
            Select category
        </button>
        <ul class="dropdown-menu">
            <li>
                <a href="#">
                    La Merridian
                </a>
            </li>
            <li>
                <a href="#">
                    Celica
                </a>
            </li>
            <li>
                <a href="#">
                    chick a licken
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="col-md-1">
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    All
            </label>
        </div>
    </div>
    <div class="col-md-1">
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Learned
            </label>
        </div>
    </div>
    <div class="col-md-2">
        <div class="radio">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Not Learned
            </label>
        </div>
    </div>
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-info">
            Filter
        </button>
        <button type="button" class="btn btn-success">
            PDF
        </button>
    </div>
</div>
<div>
    <div class="col-md-3"></div>
    <div class="col-md-7">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Words</th>
                        <th>Meanings</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->english_word }}
                    </td>
                    @foreach ($question->answers()->correct()->get() as $answer)
                        <td>{{ $answer->bengali_meaning }}</td>
                    @endforeach
                </tr>
            @endforeach
                </tbody>
        </table>
    </div>
</div>
</div>
@endsection
@section('footer')
<center>
        <strong><a>Developed by Framgia PHP Team Ambidextrous </a></strong>
    </center>
@endsection