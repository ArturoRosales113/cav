<li class="nav-item {{ Request::url() == route('front.nosotros') ? 'active' :'' }}">
    <a class="nav-link color3 text-center text-lg-left" href="{{ route('front.nosotros') }}"
        onclick="event.preventDefault();document.getElementById('nosotros-form-get').submit();">Nosotros</a>

</li>
<li class="nav-item {{ Request::url() == route('front.servicios', $fam->name) ? 'active' :'' }}">
    <a class="nav-link color3 text-center text-lg-left menu-link"
        href="{{ route('front.servicios', $fam->name) }}">Servicios</a>
</li>
<li class="nav-item {{ Request::url() == route('front.proyectos', $fam->name) ? 'active' :'' }}">
    <a class="nav-link color3 text-center text-lg-left menu-link"
        href="{{ route('front.proyectos', $fam->name) }}">Proyectos</a>
</li>
<li class="nav-item {{ Request::url() == route('front.distribuidores') ? 'active' :'' }}">
    <a class="nav-link color3 text-center text-lg-left" href="{{ route('front.distribuidores') }}"
        onclick="event.preventDefault();document.getElementById('distribuidores-form-get').submit();">Distribuidores</a>
</li>
<li class="nav-item {{ Request::url() == route('front.contacto') ? 'active' :'' }}">
    <a class="nav-link color3 text-center text-lg-left" href="{{ route('front.contacto') }}"
        onclick="event.preventDefault();document.getElementById('contacto-form-get').submit();">Contacto</a>
</li>