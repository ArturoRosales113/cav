<nav class="menu-sidebar" id="sidebar-productos">
    <div class="d-flex flex-column h-100">
        <div class="row justify-content-center py-2 sidebar-header">
            <div class="col-10">
                <div class="d-flex flex-row align-items-center">

                    <a id="dismissProductos" class="btn">
                        < </a> <h6 class="bold">Productos </h6>
                </div>
            </div>
        </div>
        <div class="row justify-content-center flex-grow-1 bg-white py-2">
            <div class="col-12">
                <ul class="nav flex-column bold text-uppercase">
                    @include('frontend.layouts.slices.menuMobileProductos')
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-10"></div>
        </div>
    </div>
</nav>