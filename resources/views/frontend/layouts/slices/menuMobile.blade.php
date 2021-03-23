<li
    class="nav-item d-flex flex-row justify-content-between{{ Request::url() == route('front.productos',$fam->name) ? 'active' :'' }}">
    <a class="nav-link text-dark" href="" style="cursor: pointer">
        Productos
    </a>
    <a class="nav-link color1" id="sideProductosCollapse" style="cursor: pointer">
        <i class="fas fa-chevron-right"></i>
    </a>
</li>
<li class="nav-item {{ Request::url() == route('front.aplicaciones', $fam->name) ? 'active' :'' }}">
    <a class="nav-link text-dark" href="{{ route('front.aplicaciones', $fam->name) }}">Aplicaciones</a>
</li>
<li class="nav-item {{ Request::url() == route('front.nosotros') ? 'active' :'' }}">
    <a class="nav-link text-dark" href="{{ route('front.nosotros') }}"
        onclick="event.preventDefault();document.getElementById('nosotros-form-get').submit();">Nosotros</a>

</li>
<li class="nav-item {{ Request::url() == route('front.servicios', $fam->name) ? 'active' :'' }}">
    <a class="nav-link text-dark" href="{{ route('front.servicios', $fam->name) }}">Servicios</a>
</li>
@if($fam->id != 1)
<li class="nav-item {{ Request::url() == route('front.proyectos', $fam->name) ? 'active' :'' }}">
    <a class="nav-link menu-link" href="{{ route('front.proyectos', $fam->name) }}">Proyectos</a>
</li>
@endif
<li class="nav-item {{ Request::url() == route('front.distribuidores') ? 'active' :'' }}">
    <a class="nav-link text-dark" href="{{ route('front.distribuidores') }}"
        onclick="event.preventDefault();document.getElementById('distribuidores-form-get').submit();">Distribuidores</a>
</li>
<li class="nav-item {{ Request::url() == route('front.recursos', $fam->name) ? 'active' :'' }}">
    <a class="nav-link text-dark" href="{{ route('front.recursos', $fam->name) }}">Recursos</a>
</li>
<li class="nav-item {{ Request::url() == route('front.contacto') ? 'active' :'' }}">
    <a class="nav-link text-dark" href="{{ route('front.contacto') }}"
        onclick="event.preventDefault();document.getElementById('contacto-form-get').submit();">Contacto</a>
</li>
<li class="nav-item {{ Request::url() == route('front.certificados') ? 'active' :'' }}">
    <a class="nav-link text-dark" href="{{ route('front.certificados') }}"
        onclick="event.preventDefault();document.getElementById('certificados-form-get').submit();">
        Certificados

    </a>
<li class="nav-item {{ Request::url() == route('front.noticias', $fam->name) ? 'active' :'' }}">
    <a class="nav-link text-dark" href="{{ route('front.noticias', $fam->name) }}">Noticias</a>
</li>