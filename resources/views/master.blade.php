<html>
   <head>
      <title>@yield('title')</title>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/master.css">
   </head>
   <body>
      <div class="container">
         <ul class="nav nav-tabs">
            <li role="presentation"><a href="{{ URL::to('home') }}">Home</a></li>
            <li role="presentation"><a href="{{ URL::to('word_list') }}">Word_list</a></li>
            <li role="presentation"><a href="{{ URL::to('category') }}">Category</a></li>
            <li role="presentation"><a href="{{ URL::to('lesson') }}">Lesson</a></li>
            <li role="presentation"><a href="{{ URL::to('result') }}">Result</a></li>
            <li role="presentation"><a href="{{ URL::to('profile') }}">User Show</a></li>
         </ul>
         <div class="row">
            <div class="container">
               @yield('content')
            </div>
         </div>
         @show
      </div>
   </body>
</html>
