<li class="nav-item d-flex flex-row {{ Request::url() == route('front.productos',$fam->name) ? 'active' :'' }}">
    <a class="nav-link menu-link" href="{{ route('front.productos', $fam->name) }}" style="cursor: pointer">
        Productos
    </a>
    <a class="nav-link menu-link" data-toggle="collapse" data-target="#productsCollapse"
    aria-controls="productsCollapse" aria-expanded="false" aria-label="Toggle navigation" style="cursor: pointer">
    <i class="fas fa-chevron-down"></i>
</a>
</li>
<li class="nav-item {{ Request::url() == route('front.aplicaciones', $fam->name) ? 'active' :'' }}">
    <a class="nav-link menu-link" href="{{ route('front.aplicaciones', $fam->name) }}">Aplicaciones</a>
</li>
<li class="nav-item {{ Request::url() == route('front.nosotros') ? 'active' :'' }}">
    <a class="nav-link" href="{{ route('front.nosotros') }}"
    onclick="event.preventDefault();document.getElementById('nosotros-form-get').submit();">Nosotros</a>

</li>
<li class="nav-item {{ Request::url() == route('front.servicios', $fam->name) ? 'active' :'' }}">
    <a class="nav-link menu-link" href="{{ route('front.servicios', $fam->name) }}">Servicios</a>
</li>
@if($fam->id != 1)
<li class="nav-item {{ Request::url() == route('front.proyectos', $fam->name) ? 'active' :'' }}">
    <a class="nav-link menu-link" href="{{ route('front.proyectos', $fam->name) }}">Proyectos</a>
</li>
@endif
<li class="nav-item {{ Request::url() == route('front.distribuidores') ? 'active' :'' }}">
    <a class="nav-link" href="{{ route('front.distribuidores') }}"
    onclick="event.preventDefault();document.getElementById('distribuidores-form-get').submit();">Distribuidores</a>
</li>
<li class="nav-item {{ Request::url() == route('front.recursos', $fam->name) ? 'active' :'' }}">
    <a class="nav-link menu-link" href="{{ route('front.recursos', $fam->name) }}">Recursos</a>
</li>
<li class="nav-item {{ Request::url() == route('front.contacto') ? 'active' :'' }}">
    <a class="nav-link" href="{{ route('front.contacto') }}"
    onclick="event.preventDefault();document.getElementById('contacto-form-get').submit();">Contacto</a>
</li>  