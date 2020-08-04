<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="shortcut icon" href="{{asset('img/logos/fav.png')}}">
  <title> {{ env('APP_NAME') }} | @yield('page_title') </title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Playfair+Display:700i" rel="stylesheet">



  <!-- Estilos -->
  @include('frontend.layouts.styles')

  <!-- Estilos personalizados de cada página -->
  @yield('page_styles')

  <!-- Meta -->
  @yield('page_head')
</head>

<body>
    <!--main-panel-->
  <div class="container-fluid mt-5 pt-5">
    @include('frontend.layouts.navbars.navbar' , ['categories' => $mainFamily->categories])

    @yield('page_banner')
    @yield('content')
    @include('frontend.layouts.footer.footer', ['mainFamily' => $mainFamily])


    @include('frontend.layouts.slices.message')
    @include('frontend.layouts.slices.menu_modal' , ['categories' => $mainFamily->categories])
    @include('frontend.susbscriber_modal')
  </div>
  <!-- Scripts Generales -->
  @include('frontend.layouts.scripts')
  <!-- Scripts personalizado de la página -->
  @yield('page_scripts')
  @include('sweet::alert')
  
</body>

</html>