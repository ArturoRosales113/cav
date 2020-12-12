<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <ul class="nav flex-column">
          {{-- <li class="nav-item {{ Request::url() == route('front.industrial.index') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.industrial.index') }}">Home</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link menu-link" data-toggle="collapse" href="#mobileProductsCollapse" role="button"
              aria-expanded="false" aria-controls="mobileProductsCollapse">
              Productos <i class="fas fa-chevron-down"></i>
            </a>

            <div class="collapse p-3" id="mobileProductsCollapse">
              @foreach ($categories as $c)
              <div class="card border-0 p-2">
                <div class="row no-gutters">
                  <div class="col-2">
                    {{-- <a href="{{ route('front.industrial.productos.categoria', $c->name) }}" class="">
                      <img
                        src="{{ $c->icon_path == null ? asset('img/brand/no_img_found.png') : asset($c->icon_path) }}"
                        class="card-img-top" alt="">

                    </a> --}}
                  </div>
                  <div class="col-10">
                    <div class="card-body py-2 text-left">
                      {{-- <a href="{{ route('front.industrial.productos.categoria', $c->name) }}" class="text-dark">
                        <span class="categoryName">{{ ucfirst($c->display_name) }}</span>
                      </a> --}}
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </li>
          {{-- <li class="nav-item {{ Request::url() == route('front.industrial.aplicaciones') ? 'active' :'' }}">
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
          <li class="nav-item {{ Request::url() == route('front.industrial.recursos') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.industrial.recursos') }}">Recursos</a>
          </li>
          <li class="nav-item {{ Request::url() == route('front.industrial.contacto') ? 'active' :'' }}">
            <a class="nav-link menu-link" href="{{ route('front.industrial.contacto') }}">Contacto</a>
          </li> --}}

        </ul>
      </div>

    </div>
  </div>
</div>