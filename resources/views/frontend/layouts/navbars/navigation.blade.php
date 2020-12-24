<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg d-flex p-0" id="menu_navbar">
    <div class="col-12 p-0">
        <div class="row justify-content-start align-items-center w-100">
            <div class="col-2 col-lg-1">
                <button class="navbar-toggler d-inline-block d-lg-none float-left" type="button" type="button"
                    id="sidebarCollapse">
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
        <div class="row bg2 justify-content-center w-100 d-lg-none m-0">
            <div class="col-10">
                <form class="form form-navbar" action="{{ route('front.busqueda') }}" method="GET">
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