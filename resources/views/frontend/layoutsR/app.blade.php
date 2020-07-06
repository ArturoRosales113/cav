<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="shortcut icon" href="{{asset('img/logos/fav.png')}}">
  <title> {{ env('APP_NAME') }} | @yield('page_title') </title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Playfair+Display:700i" rel="stylesheet">



  <!-- Estilos -->
  @include('frontend.layoutsR.styles')

  <!-- Estilos personalizados de cada página -->
  @yield('page_styles')

  <!-- Meta -->
  @yield('page_head')
</head>

<body>
  @include('frontend.layoutsR.navbars.navbar')
  <!--main-panel-->
  <div class="container-fluid mt-5 pt-5">
    @yield('page_banner')
    @yield('content')
    @include('frontend.layoutsR.footer.footer')
  </div>

  @include('frontend.layoutsR.slices.message')

  <!-- Scripts Generales -->
  @include('frontend.layoutsR.scripts')
  <!-- Scripts personalizado de la página -->
  @yield('page_scripts')
</body>

</html>