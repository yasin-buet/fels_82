<html>
    <head>
      <title>@yield('title')</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/master.css">
    </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Framgia e Learning System</a>
    </div>
    <div>
      <ul class="nav navbar-nav navbar-center">
            <li role="presentation"><a href="{{ URL::to('users') }}">Home</a></li>
            <li role="presentation"><a href="{{ URL::to('questions') }}">Word List</a></li>
            <li role="presentation"><a href="{{ URL::to('categories') }}">Category</a></li>
            <li role="presentation"><a href="{{ URL::to('lessons') }}">Lesson</a></li>
            <li role="presentation"><a href="{{ URL::to('answers') }}">Result</a></li>
            <li role="presentation"><a href="{{ URL::to('users') }}">User Show</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
         <a href="{{ URL::to('auth\register') }}">
            <span class="glyphicon glyphicon-user">Sign Up
         </a>
         </span>
      </li>
        <li><a href="{{ URL::to('auth\login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
    </div>
</nav>
</body>
</html>
@yield('content')
@yield('footer')

