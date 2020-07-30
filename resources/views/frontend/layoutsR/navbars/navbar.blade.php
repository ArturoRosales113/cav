<div class="fixed-top" id="top-navbar">

  <!-- barra superior -->
  <div class="row justify-content-end align-items-center top-bar">
    <div class="col-6 col-md-3 col-lg-3 order-2 order-md-1">
      <div class="row justify-content-center align-items-center">
        <a href="{{ route('front.industrial.index') }}" class="text-white btn btn-sm btn-link">Industrial</a>
        |
        <a href="{{ route('front.residencial.index') }}" class="text-white btn btn-sm btn-link">Residencial</a>
      </div>
    </div>
    <div class="col-6 col-md-3 col-lg-4 p-2 order-1 order-md-2">
      <div class="row justify-content-center justify-content-lg-end">
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fab fa-whatsapp"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-youtube"></i>
      </div>
    </div>
    <div class="col col-md-5 col-lg-4 d-none d-md-flex order-3" id="top-search">
      <div class="row align-items-center">
        <div class="col-6 col-md-3 text-center">
          <a href="{{ route('front.residencial.certificados') }}" class="btn btn-link text-white">
            <small>Certificados</small>
          </a>
        </div>
        <div class="col px-4">
          <form class="form  py-2" action="{{ route('front.residencial.busqueda') }}" method="GET">
            <div class="input-group">
              <input type="text" class="form-control" name="busqueda" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
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
  <nav class="navbar navbar-expand-lg d-md-flex justify-content-end" id="menu_navbar">
    <div class="container">
      <button class="navbar-toggler d-flex d-lg-none" type="button" data-toggle="modal" data-target="#menuModal">
        <i class="fas fa-bars"></i>
      </button>
      <a class="navbar-brand" href="{{ route('front.industrial.index') }}">
        <img src="{{ asset('img/logos/logo1.png') }}" id="nav-logo" alt="">
      </a>
      <div class="navbar-collapse d-flex justify-content-center pl-5">
        <ul class="navbar-nav d-none d-lg-flex flex-row justify-content-end align-items-center w-100">

          <li class="nav-item {{ Request::url() == route('front.industrial.productos') ? 'active' :'' }}">
            <a class="nav-link menu-link" data-toggle="collapse" data-target="#productsCollapse"
              aria-controls="productsCollapse" aria-expanded="false" aria-label="Toggle navigation">
              Productos
            </a>
          </li>
          <li class="nav-item {{ Request::url() == route('front.residencial.aplicaciones') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.residencial.aplicaciones') }}">Aplicaciones</a>
          </li>
          <li class="nav-item {{ Request::url() == route('front.residencial.servicios') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.residencial.servicios') }}">Servicio</a>
          </li>
          <li class="nav-item {{ Request::url() == route('front.residencial.noticias') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.residencial.noticias') }}">Noticias</a>
          </li>
          <li class="nav-item {{ Request::url() == route('front.residencial.distribuidores') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.residencial.distribuidores') }}">Distribuidores</a>
          </li>
          <li class="nav-item {{ Request::url() == route('front.residencial.recursos') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.residencial.recursos') }}">Recursos</a>
          </li>
          <li class="nav-item {{ Request::url() == route('front.residencial.contacto') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.residencial.contacto') }}">Contacto</a>
          </li>

        </ul>
      </div>

    </div>
  </nav>
  <div class="collapse container-fluid" id="productsCollapse">
    <div class="row row-cols-md-6 bg3">
      @foreach ($categories as $c)
      <div class="col p-3">
 
        <div class="card text-center bg3 border-0 p-2">
  
          <a href="{{ route('front.industrial.productos.categoria', $c->name) }}" class="">
            <img src="{{ $c->icon_path == null ? asset('img/brand/no_img_found.png') : asset($c->icon_path) }}"
              class="card-img-top" alt="">
  
          </a>
          <div class="card-body p-0 py-2 text-center">
            <a href="{{ route('front.industrial.productos.categoria', $c->name) }}">
              <small class="categoryName">{{ ucfirst($c->display_name) }}</small>
            </a>
          </div>
  
        </div>
 
      </div>
      @endforeach
      <div class="col p-3">
        <div class="card text-center bg3 border-0 p-2">

          <a href="{{ route('front.industrial.productos' ) }}" class="">
            <img src="{{ asset('img/brand/no_img_found.png') }}" class="card-img-top" alt="">
  
          </a>
          <div class="card-body p-0 py-2 text-center">
            <a href="{{ route('front.industrial.productos' ) }}">
              <small class="categoryName">Ver mas</small>
            </a>
          </div>
  
        </div>
      </div>
    </div>
  </div>

</div>