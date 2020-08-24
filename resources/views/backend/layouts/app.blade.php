<html lang="es" class="perfect-scrollbar-off">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="{{asset('img/logos/6.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title> Dashboard | @yield('page_title')</title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
    name="viewport">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Playfair+Display:700i" rel="stylesheet">
  <!-- CSS Files -->
  @include('backend.layouts.styles')
  @yield('page_styles')
</head>

<body cz-shortcut-listen="true">
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('dashboard.index') }}">PAV</a>

    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();">
          <span class="sidebar-normal">Salir&nbsp;<i class="fas fa-sign-out-alt"></i>&nbsp;</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      @include('backend.layouts.sidebar')

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h2 class="h2"> @yield('page_title')</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              @yield('dashboard_buttons')
            </div>

          </div>
        </div>
        <div class="container">
          @yield('content')
        </div>

      </main>
    </div>
  </div>

  @yield('modals')
  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  @include('backend.layouts.scripts')
  @include('sweet::alert')
  
</body>

</html>