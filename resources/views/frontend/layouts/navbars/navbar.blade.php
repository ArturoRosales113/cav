<div class="fixed-top" id="rsvp-navbar">

 <!-- barra superior -->
<div class="row justify-content-end align-items-center top-bar">
  <div class="container text-right">
  </div>
 </div>

 <!-- Barra de navegación -->
 <nav class="navbar navbar-expand-lg d-none d-lg-flex justify-content-center" id="menu_navbar">
  <div class="container">
   <div class="navbar-collapse d-flex justify-content-center pl-5">
      <ul class="navbar-nav d-none d-md-flex flex-row justify-content-center align-items-center w-100">

        <li class="nav-item {{ Request::url() == route('front.index') ? 'active' :'' }}">
          <a class="nav-link menu-link" href="{{ route('front.index') }}">Home</a>
        </li>
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
{{--
        <li class="nav-item dropdown" id="btn_vestidos">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{ route('front.vestidos') }}" role="button" aria-haspopup="true" aria-expanded="false">VESTIDOS</a>
          <div class="dropdown-menu shadow border-0 p-0 py-2 m-0">

          </div>
        </li>
 --}}



        {{-- <li class="nav-item dropdown" id="btn_vestidos">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
          <div class="dropdown-menu dropdown-menu-right shadow m-0 border-0 py-3" style="width:350px;">

           <form class="" method="POST" enctype="multipart/form-data" action="{{ route('vestidos.search') }}">
            {{ csrf_field() }}
            <div class="input-group no-border px-4">
             <input type="text" class="form-control" name="title" placeholder="Buscar" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn text-white rsvp-button" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
              </div>
            </div>
           </form>

          </div>
        </li> --}}
      </ul>
    </div>

  </div>
 </nav>
 <nav class="navbar navbar-expand-lg w-100 d-flex d-lg-none px-5 justify-content-between">

    <a href="{{route('front.index')}}">
      <img src="{{asset('img/logos/6.png')}}" id="nav-logo" alt="" height="50px">
    </a>

    <div class="row align-items-center">

    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>



    </div>


 </nav>
 {{-- @include('frontend.layouts.navbars.sidebar') --}}
</div>
