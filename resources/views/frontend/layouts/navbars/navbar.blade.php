<div class="fixed-top" id="top-navbar">

 <!-- barra superior -->
<div class="row justify-content-end align-items-center top-bar py-2">
    <div class="col-8 p-0">
       <div class="row justify-content-end">
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-youtube"></i>
       </div>
    </div>
    <div class="col p-0" id="top-search">
        <a href="" class="text-white">
            <small>Certificados</small>
        </a>
        <a href="" class="text-white">
            <small>Noticias</small>
        </a>
    </div>
 </div>

 <!-- Barra de navegación -->
 <nav class="navbar navbar-expand-lg d-none d-lg-flex justify-content-center" id="menu_navbar">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ route('front.index') }}">
            <img src="{{ asset('img/logos/logo1.png') }}" height="60px" alt="">
      </a>
   <div class="navbar-collapse d-flex justify-content-center pl-5">
    <ul class="navbar-nav d-none d-md-flex flex-row justify-content-center align-items-center w-100">

        <li class="nav-item {{ Request::url() == route('front.productos') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.productos') }}">Productos</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.aplicaciones') ? 'active' :'' }}">
         <a class="nav-link menu-link" href="{{ route('front.aplicaciones') }}">Aplicaciones</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.servicios') ? 'active' :'' }}">
         <a class="nav-link menu-link" href="{{ route('front.servicios') }}">Servicio</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.proyectos') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.proyectos') }}">Proyectos</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.distribuidores') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.distribuidores') }}">Distribuidores</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.contacto') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.contacto') }}">Contacto</a>
        </li>

      </ul>
    </div>

  </div>
 </nav>

</div>
