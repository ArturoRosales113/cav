<div class="collapse container-fluid" id="productsCollapse">
    <div class="row justify-content-around py-3">
        <div class="col-3">
            <h6 class="bold text-dark">
                Productos
            </h6>
            <div class="nav flex-column nav-pills" id="v-menu-tab" role="tablist" aria-orientation="vertical">
                @foreach ($fam->categories as $c)
                <a class="nav-link p-0 py-1 pr-1 {{ $loop->first ? 'active show' : '' }}" id="v-pills-{{ $c->name }}-tab" data-toggle="pill"
                    href="#v-pills-{{ $c->name }}" role="tab" aria-controls="v-pills-{{ $c->name }}"
                    aria-selected="{{ $loop->first ? 'true' : '' }}">
                    <img src="{{ asset($c->icon_path) }}" height="25px" class="d-inline-block" alt="">
                    &nbsp;
                    <small class="d-inline-block text-uppercase category-title">{{ $c->display_name }}</small>
                    <span class="d-inline-block float-right">
                        <svg id="flecha" xmlns="http://www.w3.org/2000/svg" width="11.904" height="11.903" viewBox="0 0 11.904 11.903">
                            <path id="Trazado_22" data-name="Trazado 22" d="M592.986,931.294l-2.976-2.976-2.976-2.976h-5.952l2.976,2.976,2.976,2.976h0l-2.975,2.976-2.976,2.976h5.952l2.976-2.976,2.976-2.976h0" transform="translate(-581.082 -925.342)">
                          </svg>                          
                    </span>
                </a>
                @endforeach
            </div>

        </div>
        <div class="col-7" style="border-left: 1pt solid #E0D6D6;">
            <div class="tab-content" id="v-menu-tabContent">
                @foreach ($fam->categories as $c)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : ''}}" id="v-pills-{{ $c->name }}"
                    role="tabpanel" aria-labelledby="v-pills-{{ $c->name }}-tab">
                    <div class="row pt-4 pl-5">
                        @foreach ($c->articles as $a)
                        <div class="col-3 text-center p-0 px-1">
                            <a href="{{ route('front.producto',['family' => $fam->name, 'slug'=> $a->slug]) }}" class="zoom-container">
                                <img src="{{ $a->pics()->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                                    class="menu-product-foto mb-2 zoom shadow" alt="">
                                <small class="text-dark collapse-product-name">
                                    {{ $a->name }}
                                </small>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row py-2 justify-content-center align-items-center bg1">
        <div class="col-4">
            <h5 clas s="text-center text-white">
                <span class="font2 text-white">Inscríbete a nuesto newsletter</span>
            </h5>

        </div>
        <div class="col-5">
            <form action="{{ route('front.create_suscription') }}" method="POST" class="form m-0">
                {{ csrf_field() }}
                <div class="input-group">
                    <input name="suscriber_email" value="{{ old('suscriber_email') }}" type="text" class="form-control"
                        placeholder="E-mail" aria-label="Correo electrónico" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" id="button-addon2">Enviar</button>
                    </div>
                </div>
                @if ($errors->has('suscriber_email'))
                <span class="help-block">
                    <strong class="text-white">{{ $errors->first('suscriber_email') }}</strong>
                </span>
                @endif
            </form>
        </div>
    </div>
</div>