<div class="sidebar" data-color="blue">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->



    <div class="sidebar-wrapper">

        <div class="user">
            <div class="photo">
              <img src="" alt="">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        {{ Auth::user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('app.settings') }}">
                                <span class="sidebar-mini-icon"><i class="fa fa-cog"></i></span>
                                <span class="sidebar-normal">Preferencias</span>
                            </a>
                        </li>
                        <li>
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                              <span class="sidebar-mini-icon"><i class="fa fa-times"></i></span>
                              <span class="sidebar-normal">Cerrar sesion</span>
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
              <li class="">
                    <a href="{{ route('dashboard.index') }}">

                        <i class="fa fa-tachometer-alt"></i>

                      <p>Dashboard</p>
                    </a>
              </li>
              <li class="">
                    <a href="{{ url('/') }}">

                        <i class="fa fa-globe"></i>

                      <p>Ir a Sitio</p>
                    </a>
              </li>
              <!-- Artículos -->
               <li>
                 <a data-toggle="collapse" href="#articles">
                  <i class="fas fa-boxes"></i>
                  <p class="sidebar-normal"> Artículos <b class="caret"></b>
                  </p>
                 </a>
                <div class="collapse " id="articles">
                 <ul class="nav">
                  <li>
                    <a href="{{ route('article.create') }}" class="">
                        <i class="fas fa-plus"></i>
                        <span class="sidebar-normal">Crear Artículo</span>
                    </a>
                  </li>
                   <li class="pl-3">
                     <a href="{{ route('article.index') }}">
                         <i class="fas fa-box"></i>
                         <small class="sidebar-normal"> Todos los Artículos</small>
                     </a>
                   </li>
                   {{-- <li class="pl-3">
                     <a href="{{ route('article.tendencias.index') }}">
                      <i class="fas fa-chart-bar"></i>
                         <small class="sidebar-normal"> Artículos destacados </small>
                     </a>
                   </li> --}}
                   {{-- <li class="pl-3">
                     <a href="{{ route('store.index') }}">
                         <i class="fas fa-store"></i>
                         <small class="sidebar-normal">Por Sucursal</small>
                     </a>
                   </li> --}}
                   <li class="pl-3">
                     <a href="{{ route('concept.index') }}">
                         <i class="fas fa-th-large"></i>
                         <small class="sidebar-normal">Por Conceptos</small>
                     </a>
                   </li>
                   <li class="pl-3">
                     <a href="{{ route('clasification.index') }}">
                         <i class="fas fa-th"></i>
                         <small class="sidebar-normal">Por Clasificaciones</small>
                     </a>
                   </li>
                   {{-- <li class="pl-3">
                     <a href="{{ route('marca.index') }}">
                         <i class="fas fa-tags"></i>
                         <small class="sidebar-normal">Por Marcas</small>
                     </a>
                   </li>
                   <li class="pl-3">
                     <a href="{{ route('acabado.index') }}">
                         <i class="fas fa-tshirt"></i>
                         <small class="sidebar-normal">Por Acabado</small>
                     </a>
                   </li>
                   <li class="pl-3">
                     <a href="{{ route('linea.index') }}">
                         <i class="fab fa-linode"></i>
                         <small class="sidebar-normal">Por Línea</small>
                     </a>
                   </li> --}}
                  </ul>
                </div>
               </li>
               <!-- Pedidos -->
               {{-- <li>
                 <a href="{{ route('pedido.index') }}">
                      <i class="fas fa-truck"></i>
                     <p class="sidebar-normal"> Pedidos </p>
                 </a>
               </li> --}}
               <!-- Citas -->
               <li>
                 <a href="{{ route('cita.index') }}">
                     <i class="far fa-calendar-alt"></i>
                     <p class="sidebar-normal"> Citas </p>
                 </a>
               </li>
               <!-- Mensajes -->
               <li>
                 <a href="{{ route('mensaje.index') }}">
                     <i class="fas fa-envelope"></i>
                     <p class="sidebar-normal"> Mensajes </p>
                 </a>
               </li>
               <!-- Testimonios -->
               <li>
                 <a href="{{ route('testimonio.index') }}">
                  <i class="fas fa-comments"></i>
                     <p class="sidebar-normal"> Testimonios </p>
                 </a>
               </li>
               <!-- Banners -->
               <li>
                 <a href="{{ route('banner.index') }}">
                     <i class="fas fa-file-image"></i>
                     <p class="sidebar-normal">Banners</p>
                 </a>
               </li>
              @role('admin')
              <li>
                <a data-toggle="collapse" href="#users">
                 <i class="fas fa-users-cog"></i>
                 <p class="sidebar-normal"> Usuarios <b class="caret"></b>
                 </p>
                </a>
               <div class="collapse " id="users">
                <ul class="nav">
                 <li>
                   <a href="{{ route('user.create') }}">
                       <i class="fas fa-user"></i>
                       <span class="sidebar-normal">Crear Usuario</span>
                   </a>
                 </li>
                  <li>
                    <a href="{{ route('user.index') }}">
                        <i class="fas fa-users"></i>
                        <span class="sidebar-normal"> Todos los Usuarios</span>
                    </a>
                  </li>
                 </ul>
               </div>
              </li>
              @endrole

        </ul>
    </div>
</div>
