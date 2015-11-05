<html>
   <head>
      <title>@yield('title')</title>
      <style>
         body{
         padding-top: 20px;
         padding-left: 30px;
         }
         div.container{
         padding-left: 300px;
         padding-top: 20px;
         }
         #navcontainer ul
         {
         list-style-type: none;
         text-align: center;
         border: 200px;
         }
         ul#menu {
         padding: 0;
         }
         ul#menu li {
         display: inline;
         margin:0 auto;
         }
         ul#menu li a {
         background-color: black;
         color: white;
         padding: 10px 20px;
         text-decoration: none;
         border-radius: 4px 4px 0 0;
         }
         ul#menu li a:hover {
         background-color: orange;
         }
      </style>
   </head>
   <body>
      <div id="navcontainer">
         <ul id="menu">
            <li><a href="{{ URL::to('home') }}">
               <i class="icon-dashboard"></i>
               <span class="menu-text"> Home </span>
               </a>
            </li>
            <li>
               <a href="{{ URL::to('word_list') }}">
               <i class="icon-dashboard"></i>
               <span class="menu-text"> Word List </span>
               </a>
            </li>
            <li>
               <a href="{{ URL::to('category') }}">
               <i class="icon-dashboard"></i>
               <span class="menu-text"> Category </span>
               </a>
            </li>
            <li>
               <a href="{{ URL::to('lesson') }}">
               <i class="icon-dashboard"></i>
               <span class="menu-text"> Lesson </span>
               </a>
            </li>
            <li>
               <a href="{{ URL::to('result') }}">
               <i class="icon-dashboard"></i>
               <span class="menu-text"> Result </span>
               </a>
            </li>
            <li>
               <a href="{{ URL::to('profile') }}">
               <i class="icon-dashboard"></i>
               <span class="menu-text"> User Show </span>
               </a>
            </li>
         </ul>
      </div>
      @show
      <div class="container">
         @yield('content')
      </div>
   </body>
</html>