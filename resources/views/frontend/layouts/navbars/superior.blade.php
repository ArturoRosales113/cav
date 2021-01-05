<!-- barra superior -->
<div class="row justify-content-center align-items-stretch top-bar py-2 py-lg-0">

    <div class="col-12 col-md-3 col-lg-4 offset-lg-1 order-2 order-md-1">
        <div class="row justify-content-center justify-content-lg-start align-items-center h-100">
            @foreach ($families as $f)
            <a href="{{ route('front.index', $f->display_name) }}" class="text-white btn btn-sm btn-link">
                {{ ucFirst($f -> display_name) }}
            </a>
            {{ !$loop->last ? '|' : ''}}
            @endforeach
        </div>
    </div>

    <div class="col-6 col-md-3 col-lg-2 p-2 order-1 order-md-2 d-none d-lg-flex">
        <div class="row w-100 justify-content-center justify-content-lg-end">
            @include('frontend.layouts.slices.menuSociales')
        </div>
    </div>

    <div class="col col-md-5 col-lg-5 d-none d-lg-flex order-3" id="top-search">
        <div class="row align-items-center">
            <div class="col-6 col-md-3 text-center">
                <a class="btn btn-link text-white" href="{{ route('front.certificados') }}"
                    onclick="event.preventDefault();document.getElementById('certificados-form-get').submit();">
                    <small class="text-uppercase bold">
                        Certificados
                    </small>
                </a>

            </div>

            <div class="col-6 col-md-3 text-center">
                <a href="{{ route('front.noticias',$fam->display_name) }}" class="btn btn-link text-white">
                    <small class="text-uppercase bold">Noticias</small>
                </a>
            </div>

            <div class="col-5">
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
</div>
<!-- barra superior -->