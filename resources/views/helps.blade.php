@extends('master')
@section('title', 'Page Title')
@section('content')
<link rel="stylesheet" type="text/css" href="css/faq.css">
{!! Html::style('css/stylesheet.css') !!}
{!! Html::style('css/faq.css') !!}
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
                            {!! Form::submit('Follower') !!}
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
        <body>
            <div class="container">
            <div class="page-header">
                <h1>FAQ <small>E-Learning Frequently Asked Questions</small></h1>
            </div>
            <div class="container">
                <br />
                <br />
                <br />
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        This section contains a wealth of information, related to <strong>E Learning</strong> and its store. If you cannot find an answer to your question,
                        make sure to contact us.
                    </div>
                    <br />
                    <div class="panel-group" id="accordion">
                        <div class="faqHeader">General questions</div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is account registration required?</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Account registration at <strong>E-Learning</strong> is only required if you will be learning or buying themes.
                                    This ensures a valid communication channel for all parties involved in any transactions.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Can I start my own E-Learning lessons?</a>
                                </h4>
                            </div>
                            <div id="collapseTen" class="panel-collapse collapse">
                                <div class="panel-body">
                                    A lot of the content of the site has been submitted by the community. Whether it is a commercial element/template/theme or a free one, you are encouraged to contribute. All credits are published along with the resources.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What is the benifit i am likely to derive?</a>
                                </h4>
                            </div>
                            <div id="collapseEleven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <strong>HUGE!!</strong>you will be learning a different language
                                </div>
                            </div>
                        </div>
                        <div class="faqHeader">Learners</div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Who cen learn lessons?</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Any registed user, who presents a work, which is genuine and appealing, can post it on <strong>E-learning</strong>.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">I want to learn my lessons - what are the steps?</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The steps involved in this process are really simple. All you need to do is:
                                    <ul>
                                        <li>Register an account</li>
                                        <li>Activate your account</li>
                                        <li>Go to the <strong>Themes</strong> section and upload your theme</li>
                                        <li>The next step is the approval step, which usually takes about 72 hours.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How much do I get from each lesson?</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Here, at <strong>E-Learningd</strong>, we offer a great, 70% rate for each learner, regardless of any restrictions, such as volume, date of entry, etc.
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Why learn my lessons here?</a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">
                                    There are a number of reasons why you should join us:
                                    <ul>
                                        <li>A great 70% flat rate for your lessons.</li>
                                        <li>Fast response/approval times. Many sites take weeks to process a theme or template. And if it gets rejected, there is another iteration. We have aliminated this, and made the process very fast. It only takes up to 72 hours for a template/theme to get reviewed.</li>
                                        <li>We are not an exclusive marketplace. This means that you can learn your lessons on <strong>E-Learning</strong>, as well as on any other marketplate, and thus increase your earning potential.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the learning options?</a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse">
                                <div class="panel-body">
                                    The best way to transfer funds is via Paypal. This secure platform ensures timely learnings and a secure environment.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">When do I get keep up with new words?</a>
                                </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Our standard learning plan provides for monthly learnings. At the end of each month, all accumulated funds are transfered to your account.
                                    The minimum amount of your balance should be at least 70 USD.
                                </div>
                            </div>
                        </div>

                        <div class="faqHeader">Teachers</div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I want to teach a new language - what are the steps?</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Buying a theme on <strong> E-Learning </strong> is really simple. Each theme has a live preview.
                                    Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                                    <br />
                                    Once the transaction is complete, you gain full access to the purchased product.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Is this the latest version of an lesson</a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Each lesson in <strong>E-Learning</strong> is maintained to its latest version. This ensures its smooth operation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </div>
</div>
@endsection
@section('footer')
    <center>
        <strong><a>Developed by Framgia PHP Team Ambidextrous </a></strong>
    </center>
@endsection