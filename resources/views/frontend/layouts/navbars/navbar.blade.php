<div class="fixed-top" id="top-navbar">

 <!-- barra superior -->
<div class="row justify-content-end align-items-center top-bar">
    <div class="col-12 col-md-5 col-lg-8 p-3">
       <div class="row justify-content-end">
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-youtube"></i>
       </div>
    </div>
    <div class="col d-none d-md-flex" id="top-search">
        <div class="row align-items-center">
            <div class="col-6 col-md-3 text-center">
             <a href="" class="btn btn-link text-white">
                <small>Certificados</small>
            </a>
            </div>
            <div class="col-6 col-md-3 text-center">
             <a href="" class="btn btn-link text-white">
                <small>Noticias</small>
            </a>
            </div>
            <div class="col px-4 py-2">
                <form class="form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                                <i class="fas fa-search"></i>
                            </button>
                          </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
 </div>

 <!-- Barra de navegación -->
 <nav class="navbar navbar-expand-lg d-md-flex justify-content-center" id="menu_navbar">
  <div class="container">
    <button class="navbar-toggler d-flex" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        menu
      </button>
      <a class="navbar-brand" href="{{ route('front.industrial.index') }}">
            <img src="{{ asset('img/logos/logo1.png') }}" height="60px" alt="">
      </a>
   <div class="navbar-collapse d-flex justify-content-center pl-5">
    <ul class="navbar-nav d-none d-md-flex flex-row justify-content-center align-items-center w-100">

        <li class="nav-item {{ Request::url() == route('front.industrial.productos') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.industrial.productos') }}">Productos</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        <li class="nav-item {{ Request::url() == route('front.industrial.aplicaciones') ? 'active' :'' }}">
         <a class="nav-link menu-link" href="{{ route('front.industrial.aplicaciones') }}">Aplicaciones</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.industrial.servicios') ? 'active' :'' }}">
         <a class="nav-link menu-link" href="{{ route('front.industrial.servicios') }}">Servicio</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.industrial.proyectos') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.industrial.proyectos') }}">Proyectos</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.industrial.distribuidores') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.industrial.distribuidores') }}">Distribuidores</a>
        </li>
        <li class="nav-item {{ Request::url() == route('front.industrial.contacto') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.industrial.contacto') }}">Contacto</a>
        </li>

      </ul>
    </div>

  </div>
 </nav>

</div>
