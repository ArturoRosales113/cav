<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-tachometer-alt feather"></i>
            Dashboard
          </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Paginas</span>
          </h6>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('app.pages') }}">
            <i class="far fa-file-alt feather"></i>
            Noticias
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('app.pages') }}">
            <i class="fas fa-file-alt feather"></i>
            Contenido de las páginas
          </a>
        </li>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Productos</span>
          </h6>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('article.index') }}">
            <i class="fas fa-store feather"></i>
            Todos los productos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('article.index') }}">
            <i class="fas fa-boxes feather"></i>
            Todos las categorias
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('article.index') }}">
            <i class="fas fa-tags feather"></i>
            Todos las marcas
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-toolbox feather"></i>
              Aplicaciones
            </a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-file-download feather"></i>
              Descargas
            </a>
          </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Usuarios</span>
          </h6>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-users feather"></i>
            Todos Usuarios
          </a>
        </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Sucursales</span>
          </h6>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-store-alt feather"></i>
            Sucursales
          </a>
        </li>
      </ul>


    </div>
  </nav>
