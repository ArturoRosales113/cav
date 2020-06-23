<!DOCTYPE html>
<html lang="es" dir="ltr">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="shortcut icon" href="{{asset('img/logos/fav.png')}}">
  <title> {{ config('APP_NAME') }} | @yield('page_title')  </title>

   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Playfair+Display:700i" rel="stylesheet">



  <!-- Estilos -->
    @include('frontend.layouts.styles')

  <!-- Estilos personalizados de cada página -->
    @yield('page_styles')

  <!-- Meta -->
    @yield('page_head')
 </head>
 <body>
  @include('frontend.layouts.navbars.navbar')
  <!--main-panel-->
  <div class="container-fluid mt-5 pt-5">
   @yield('page_banner')
    @yield('content')
   @include('frontend.layouts.footer.footer')
  </div>

  @include('frontend.layouts.slices.message')

  <!-- Scripts Generales -->
  @include('frontend.layouts.scripts')
  <!-- Scripts personalizado de la página -->
  @yield('page_scripts')
 </body>
</html>
