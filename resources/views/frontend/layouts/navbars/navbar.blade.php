<div class="fixed-top" id="top-navbar">
  <!-- barra superior -->
  <div class="row justify-content-center align-items-stretch top-bar">
    
    <div class="col-12 col-md-3 col-lg-2 offset-lg-1 order-2 order-md-1">
      <div class="row justify-content-center justify-content-lg-start align-items-center">
        @foreach ($families as $f)
        <a href="{{ route('front.index', $f->display_name) }}" class="text-white btn btn-sm btn-link">
          <small>{{ $f -> display_name }}</small>
        </a>
        {{ !$loop->last ? '|' : ''}}
        @endforeach  
      </div>
    </div>
    
      <div class="col-6 col-md-3 col-lg-4 p-2 order-1 order-md-2 d-none d-lg-flex">
        <div class="row w-100 justify-content-center justify-content-lg-end">
          @include('frontend.layouts.slices.menuSociales')
        </div>
      </div>  
      
      <div class="col col-md-5 col-lg-5 d-none d-md-flex order-3" id="top-search">
        <div class="row align-items-center">
          <div class="col-6 col-md-3 text-center">
            <a class="btn btn-link text-white" href="{{ route('front.certificados') }}"
            onclick="event.preventDefault();document.getElementById('certificados-form-get').submit();"> 
              <small class="text-uppercase bold">
                Certificados
              </small>
            </a>
            <form class="form" action="{{ route('front.certificados') }}" id="certificados-form-get" method="GET">
              <input type="hidden" name="family" value="{{ $fam->name }}">
            </form>
          </div>  
        
          <div class="col-6 col-md-3 text-center">
            <a href="{{ route('front.noticias',$fam->display_name) }}" class="btn btn-link text-white">
              <small class="text-uppercase bold">Noticias</small>
            </a>
          </div>  
        
          <div class="col-6 px-4">
            <form class="form" action="{{ route('front.busqueda') }}" method="GET">
              <div class="input-group">
                <input type="text" class="form-control" name="busqueda" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
                <input type="hidden" name="family" value="{{ $fam->name }}">
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
  <!-- barra superior -->

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg d-flex p-0" id="menu_navbar">
    <div class="col-12 p-0">
      <div class="row justify-content-start align-items-center w-100">
        <div class="col-2 col-lg-1">
            <button class="navbar-toggler d-inline-block d-lg-none float-left" type="button" type="button" id="sidebarCollapse" >
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="col-9 col-lg-2 text-center text-lg-left">
            <a class="navbar-brand" href="{{ route('front.index', $fam->display_name) }}">
                <img src="{{ asset('img/logos/logo1.png') }}" id="nav-logo" alt="">
            </a>
        </div>
        <div class="col-8 p-0">
            <div class="navbar-collapse d-flex justify-content-center pl-5">
                <ul class="navbar-nav d-none d-lg-flex flex-row justify-content-end align-items-center w-100">
                    @include('frontend.layouts.slices.menuDesktop')    
                </ul>
            </div> 
        </div> 
    </div>
    <div class="row bg2 justify-content-center w-100 d-lg-none">
      <div class="col-10">
        <form class="form" action="{{ route('front.busqueda') }}" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" name="busqueda" aria-label="Recipient's username"
            aria-describedby="basic-addon2">
            <input type="hidden" name="family" value="{{ $fam->name }}">
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
  </nav>

  {{-- collapse --}}
  <div class="collapse container-fluid bg-white" id="productsCollapse">
    <div class="row justify-content-center py-5">
        <div class="col-3 p-0">
            <h5 class="bold text-dark">
                Productos
            </h5>
            <div class="nav flex-column nav-pills" id="v-menu-tab" role="tablist" aria-orientation="vertical">
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
        <div class="col-1"></div>
        <div class="col-6">
            <div class="tab-content" id="v-menu-tabContent">
                @foreach ($fam->categories as $c)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : ''}}" id="v-pills-{{ $c->name }}" role="tabpanel" aria-labelledby="v-pills-{{ $c->name }}-tab">
                    <div class="row pt-4">
                        @foreach ($c->articles as $a)
                        <div class="col-3 text-center">
                            <a href="{{ route('front.producto',['family' => $fam->name, 'slug'=> $a->slug]) }}">
                                <img src="{{ $a->pics()->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}" class="menu-product-foto mb-2 shadow" alt="">
                                <small class="text-dark ">
                                    {{ $a->name }}
                                </small>
                            </a>
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
                <span class="font2">Inscríbete a nuesto newsletter</span>
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