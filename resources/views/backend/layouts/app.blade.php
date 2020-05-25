<html lang="es" class="perfect-scrollbar-off">
 <head>
     <meta charset="utf-8">
     <link rel="shortcut icon" href="{{asset('img/logos/6.png')}}">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <title></title>
     <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
     <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Playfair+Display:700i" rel="stylesheet">
     <!-- CSS Files -->
     @include('backend.layouts.styles')
     @yield('page_styles')
 </head>
 <body class="sidebar-mini">
  <div class="wrapper">
   @include('backend.layouts.sidebar')
   <div class="main-panel">
    @yield('content')
   </div>
  </div>
  @include('backend.layouts.scripts')
  @yield('page_scripts')
 </body>
</html>
