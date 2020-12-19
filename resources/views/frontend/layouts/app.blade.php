<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <link rel="shortcut icon" href="{{asset('fav.png')}}">
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
  <div class="container-fluid d-block" id="main-container">


    <div class="content" id="content">
      @include('frontend.layouts.navbars.navbar' , ['families' => $families])

      @yield('page_banner')

      @yield('content')
  
      @include('frontend.layouts.footer.footer', ['families' => $families])
  
      @include('frontend.layouts.slices.message')
    </div>
    <!-- Sidebar -->
    <nav id="sidebar">

      <div id="dismiss">
          <i class="fas fa-arrow-left"></i>
      </div>

      <div class="sidebar-header">
          <h3>Bootstrap Sidebar</h3>
      </div>

      <ul class="list-unstyled components">
          <p>Dummy Heading</p>
          <li class="active">
              <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
              <ul class="collapse list-unstyled" id="homeSubmenu">
                  <li>
                      <a href="#">Home 1</a>
                  </li>
                  <li>
                      <a href="#">Home 2</a>
                  </li>
                  <li>
                      <a href="#">Home 3</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="#">About</a>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                  <li>
                      <a href="#">Page 1</a>
                  </li>
                  <li>
                      <a href="#">Page 2</a>
                  </li>
                  <li>
                      <a href="#">Page 3</a>
                  </li>
              </ul>
          </li>
          <li>
              <a href="#">Portfolio</a>
          </li>
          <li>
              <a href="#">Contact</a>
          </li>
      </ul>
    </nav>
    <div class="overlay"></div>

  </div>

  @include('frontend.layouts.slices.formsGet')


  <!-- Scripts Generales -->
  @include('frontend.layouts.scripts')

  <!-- Scripts personalizado de la página -->
  @yield('page_scripts')

  @include('sweet::alert')
  
</body>

</html>