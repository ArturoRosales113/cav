<div class="collapse container-fluid bg-white" id="productsCollapse">
    <div class="row justify-content-center py-5">
        <div class="col-3 p-0">
            <h5 class="bold text-dark">
                Productos
            </h5>
            <div class="nav flex-column nav-pills" id="v-menu-tab" role="tablist" aria-orientation="vertical">
                @foreach ($fam->categories as $c)
                <a class="nav-link py-1" id="v-pills-{{ $c->name }}-tab" data-toggle="pill"
                    href="#v-pills-{{ $c->name }}" role="tab" aria-controls="v-pills-{{ $c->name }}"
                    aria-selected="{{ $loop->first ? 'true' : '' }}">
                    <img src="{{ $c->icon_path }}" height="30px" class="d-inline-block" alt="">
                    &nbsp;
                    <small class="d-inline-block text-uppercase">{{ $c->display_name }}</small>
                    <span class="d-inline-block float-right">></span>
                </a>
                @endforeach
            </div>

        </div>
        <div class="col-1"></div>
        <div class="col-6">
            <div class="tab-content" id="v-menu-tabContent">
                @foreach ($fam->categories as $c)
                <div class="tab-pane fade {{ $loop->first ? 'show active' : ''}}" id="v-pills-{{ $c->name }}"
                    role="tabpanel" aria-labelledby="v-pills-{{ $c->name }}-tab">
                    <div class="row pt-4">
                        @foreach ($c->articles as $a)
                        <div class="col-3 text-center">
                            <a href="{{ route('front.producto',['family' => $fam->name, 'slug'=> $a->slug]) }}">
                                <img src="{{ $a->pics()->count() > 0 ? asset($a->pics()->first()->path) : asset('img/brand/no_img_found.png') }}"
                                    class="menu-product-foto mb-2 shadow" alt="">
                                <small class="text-dark ">
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
            <h5 class="text-center text-white">
                <span class="font2">Inscríbete a nuesto newsletter</span>
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