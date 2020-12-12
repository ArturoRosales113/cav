<div class="fixed-top" id="top-navbar">
  
  <!-- barra superior -->
  <div class="row justify-content-center align-items-stretch top-bar">
    <div class="col-6 col-md-3 col-lg-3 order-2 order-md-1">
      <div class="row justify-content-center align-items-center">
        @foreach ($families as $f)
        <a href="{{ route('front.index', $f->display_name) }}" class="text-white btn btn-sm btn-link">
          <small>{{ $f -> display_name }}</small>
        </a>
        {{ !$loop->last ? '|' : ''}}
        @endforeach  
      </div>
    </div>
    <div class="col-6 col-md-3 col-lg-4 p-2 order-1 order-md-2">
      <div class="row justify-content-center justify-content-lg-end">
        <a href="https://www.instagram.com/grupohidalgo/"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com/company/puertas-autom%C3%A1ticas-de-veracruz/"><i
          class="fab fa-linkedin-in"></i></a>
          <a href=""><i class="fab fa-whatsapp"></i></a>
          <a href="https://www.facebook.com/puertas.veracruz"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.youtube.com/channel/UCVgbjj2mbX8FmTCwIqnUB8Q"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="col col-md-5 col-lg-5 d-none d-md-flex order-3" id="top-search">
        <div class="row align-items-center">
          <div class="col-6 col-md-3 text-center">
            <a href="{{ route('front.certificados') }}" class="btn btn-link text-white">
              <small>Certificados</small>
            </a>
          </div>
          <div class="col-6 col-md-3 text-center">
            <a href="{{ route('front.noticias',$fam->display_name) }}" class="btn btn-link text-white">
              <small>Noticias</small>
            </a>
          </div>
          <div class="col px-4">
            <form class="form" action="{{ route('front.busqueda') }}" method="GET">
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
    <div class="row w-100 justify-content-center">
      <div class="col-10">
        <div class="row justify-content-center align-items-center w-100">
          <div class="col-lg-2">
            <button class="navbar-toggler d-flex d-lg-none" type="button" data-toggle="modal" data-target="#menuModal">
              <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('front.index', $fam->display_name) }}">
              <img src="{{ asset('img/logos/logo1.png') }}" id="nav-logo" alt="">
            </a>
          </div>
          <div class="col-10">
            <div class="navbar-collapse d-flex justify-content-center pl-5">
              <ul class="navbar-nav d-none d-lg-flex flex-row justify-content-end align-items-center w-100">
                
                <li class="nav-item d-flex flex-row {{ Request::url() == route('front.productos',$fam->display_name) ? 'active' :'' }}">
                  <a class="nav-link menu-link" href="" style="cursor: pointer">
                    Productos
                  </a>
                  <a class="nav-link menu-link" data-toggle="collapse" data-target="#productsCollapse"
                  aria-controls="productsCollapse" aria-expanded="false" aria-label="Toggle navigation" style="cursor: pointer">
                    <i class="fas fa-chevron-down"></i>
                  </a>
                </li>
                <li class="nav-item {{ Request::url() == route('front.aplicaciones', $fam->display_name) ? 'active' :'' }}">
                  <a class="nav-link menu-link" href="{{ route('front.aplicaciones', $fam->display_name) }}">Aplicaciones</a>
                </li>
                <li class="nav-item {{ Request::url() == route('front.nosotros') ? 'active' :'' }}">
                  <a class="nav-link menu-link" href="{{ route('front.nosotros') }}">Nosotros</a>
                </li>
                <li class="nav-item {{ Request::url() == route('front.servicios', $fam->display_name) ? 'active' :'' }}">
                  <a class="nav-link menu-link" href="{{ route('front.servicios', $fam->display_name) }}">Servicios</a>
                </li>
                <li class="nav-item {{ Request::url() == route('front.proyectos', $fam->display_name) ? 'active' :'' }}">
                  <a class="nav-link menu-link" href="{{ route('front.proyectos', $fam->display_name) }}">Proyectos</a>
                </li>
                <li class="nav-item {{ Request::url() == route('front.distribuidores') ? 'active' :'' }}">
                  <a class="nav-link menu-link" href="{{ route('front.distribuidores') }}">Distribuidores</a>
                </li>
                <li class="nav-item {{ Request::url() == route('front.recursos', $fam->display_name) ? 'active' :'' }}">
                  <a class="nav-link menu-link" href="{{ route('front.recursos', $fam->display_name) }}">Recursos</a>
                </li>
                <li class="nav-item {{ Request::url() == route('front.contacto') ? 'active' :'' }}">
                  <a class="nav-link menu-link" href="{{ route('front.contacto') }}">Contacto</a>
                </li>        
              </ul>
            </div> 
          </div> 
        </div>
      </div>  
    </div>
  </nav>
{{-- collapse --}}
<div class="collapse container-fluid bg-white" id="productsCollapse">
  <div class="row justify-content-center py-5">
    <div class="col-4">
      <h5 class="bold text-dark">
        Productos
      </h5>
      <div class="nav flex-column nav-pills pr-4" id="v-menu-tab" role="tablist" aria-orientation="vertical">
        @foreach ($fam->categories as $c)
        <a class="nav-link py-1" id="v-pills-{{ $c->name }}-tab" data-toggle="pill" href="#v-pills-{{ $c->name }}" role="tab" aria-controls="v-pills-{{ $c->name }}" aria-selected="{{ $loop->first ? 'true' : '' }}">
          <img src="{{ $c->icon_path }}" height="30px" class="d-inline-block" alt="">
          &nbsp;
          <small class="d-inline-block text-dark text-uppercase">{{ $c->display_name }}</small>
          <span class="d-inline-block text-dark float-right">></span>
        </a>
        @endforeach
      </div>
      
    </div>
    <div class="col-6">
      <div class="tab-content" id="v-menu-tabContent">
        @foreach ($fam->categories as $c)
        <div class="tab-pane overflow-hidden fade {{ $loop->first ? 'show active' : ''}}" id="v-pills-{{ $c->name }}" role="tabpanel" aria-labelledby="v-pills-{{ $c->name }}-tab">
          <div class="row">
            @foreach ($c->articles as $a)
            <div class="col-3 text-center">
              <img src="{{ $a->pics()->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}" class="menu-product-foto shadow" alt="">
              <small class="text-dark ">
                {{ $a->name }}
              </small>
            </div>
            @endforeach
          </div>
        </div>    
        @endforeach
      </div>
    </div>
  </div>
  <div class="row py-2 justify-content-center align-items-center bg1">
    <div class="col-4">
      <h5 class="text-center text-white">            
        <span class="font2">Inscríbete a nuesto newssletter</span>
      </h5>
      
    </div>
    <div class="col-5">
      <form action="{{ route('front.create_suscription') }}" method="POST" class="form m-0">
        {{ csrf_field() }}
        <div class="input-group">
          <input name="suscriber_email" value="{{ old('suscriber_email') }}" type="text" class="form-control" placeholder="E-mail" aria-label="Correo electrónico" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="submit" id="button-addon2">Enviar</button>
          </div>
        </div>
        @if ($errors->has('suscriber_email'))
        <span class="help-block">
          <strong class="text-white">{{ $errors->first('suscriber_email') }}</strong>
        </span>
        @endif
      </form>
    </div>
  </div>
</div>

</div>