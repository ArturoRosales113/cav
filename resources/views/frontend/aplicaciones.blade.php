@extends('frontend.layouts.app')

@section('page_head')
<link rel="stylesheet" href="{{ asset('css/taggd.css') }}">
@endsection


@section('content')
<div class="row justify-content-center py-5">
    <div class="col-12 col-md-11">
        <div class="row">
            <div class="col-12 col-lg-2 pt-lg-5">
                <div class="nav flex-row flex-lg-column nav-pills mt-5" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                @foreach ($fam->aplications as $ap)
                <a class="pav-pill white mb-3 text-center shadow {{ $loop -> first ? 'active' : '' }}"
                    id="{{ 'pill-'.$ap -> display_name }}" data-toggle="pill"
                    href="{{ '#tab-'.$ap -> display_name }}" role="tab" aria-controls="v-pills-home"
                    {{ $loop->first ? 'aria-selected="true"' : '' }}>
                    <small> {{ ucFirst($ap->name) }}</small>
                </a>
                @endforeach
            </div>
        </div>
        <div class="col-12 col-lg-10">
            <div class="tab-content" id="v-pills-tabContent">
                @foreach ($fam->aplications as $at)
                <div class="tab-pane fade show {{ $loop -> first ? 'active' : '' }}"
                    id="{{ 'tab-'.$at -> display_name }}" role="tabpanel"
                    aria-labelledby="{{ '#pill-'. $at -> display_name }}">
                    <div class="row">
                        
                        <div class="col-12 col-lg-9">
                            <h4 class="bold text-dark text-center py-4">
                                {{ ucFirst($at->name)}}
                            </h4>
                            <img class="rmap w-100" src="{{ $at->img_path == null ? asset('img/brand/no_img_found.png') : asset($at->img_path) }}" alt="{{ $at->name }}" id="{{ 'img-'.$at->name }}">
                            <div class="row py-4">
                                <div class="col-12">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        
                                        @foreach ($at->articles as $atA)
                                        <div class="tab-pane fade show {{$loop->first ? 'active' : ''}}" id="v-pills-{{ $at->display_name }}articles-{{ $atA->id }}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-8 col-lg-3">
                                                    <img src="{{ $atA->pics()->count() > 0 ? asset($atA->pics()->first()->path) : asset('img/brand/no_img_found.png') }}" alt="" class="aplications-article">
                                                </div>
                                                <div class="col-12 col-lg-9 text-center">
                                                    <p class="text-justify">
                                                        <span class="bold text-dark">
                                                            {{ $atA->name }}
                                                        </span>
                                                        <br>
                                                        <small class="">
                                                            {{ $atA->description }}
                                                        </small>
                                                    </p>
                                                    <a href="{{ route('front.producto', [$fam->display_name,$atA -> slug]) }}" class="btn rounded-pill bg2" >
                                                        <small class="text-white">Ver producto</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 pt-5 ">
                            <span class="text-dark mb-2">Productos utilizados</span>
                            <div class="aplications-product-container">
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                @foreach ($at->articles as $atA)
                                <a class="nav-link {{$loop->first ? 'active' : ''}}" id="v-pills-home-tab"
                                    href="#v-pills-{{ $at->display_name }}articles-{{ $atA->id }}"
                                    role="tab" aria-controls="v-pills-articles-{{ $atA->id }}"
                                    aria-selected="{{$loop->first ? 'true' : 'false'}}"
                                    datA-toggle="pill"
                                    >
                                    <img src="{{ $atA->pics()->count() > 0 ? asset($atA->pics()->first()->path) : asset('img/brand/no_img_found.png') }}" alt="" class="aplications-article">
                                    <small class="text-center text-dark">{{ $atA -> name }}</small>
                                </a>
                                
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('page_scripts')
<script src="{{ asset('js/taggd.js') }}"></script>
<script>
    // Hospital
    const options = {};
    const hospitalImg = document.getElementById('img-hospital');
    if (hospitalImg)
    {
        const hospital = new Taggd(hospitalImg, options, 
        [
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.36992,
                    "y": 0.31563
                },
                "text": "Puertas de madera"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.64141,
                    "y": 0.27049
                },
                "text": "Corta fuego"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.31328,
                    "y": 0.59688
                },
                "text": "Salida de emergencia"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.41484,
                    "y": 0.67674
                },
                "text": "Puerta antipánico"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.45195,
                    "y": 0.80174
                },
                "text": "Puerta giratoria automática"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.48594,
                    "y": 0.64201
                },
                "text": "Rayos X"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.525,
                    "y": 0.61076
                },
                "text": "Quirófano"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.55039,
                    "y": 0.57951
                },
                "text": "Batiente"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.10703,
                    "y": 0.55174
                },
                "text": "M3Bar"
            })
        ]);
    }
    
    // Hotel
    const hotelImg = document.getElementById('img-hotel');
    if(hotelImg)
    {
        const hotel = new Taggd(hotelImg, options, 
        [         
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.44414,
                    "y": 0.23229
                },
                "text": "Emergencia"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.56719,
                    "y": 0.21146
                },
                "text": "Emergencia"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.44609,
                    "y": 0.52396
                },
                "text": "Acceso a habitaciones"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.43047,
                    "y": 0.62118
                },
                "text": "Cortafuego"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.46953,
                    "y": 0.61076
                },
                "text": "HCG10"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.59141,
                    "y": 0.57951
                },
                "text": "HCG10"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.4957,
                    "y": 0.72188
                },
                "text": "Cortinas Antihuracán"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.57188,
                    "y": 0.6941
                },
                "text": "Cortafuego"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.63438,
                    "y": 0.66632
                },
                "text": "Cortinas Antihuracán"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.33945,
                    "y": 0.88507
                },
                "text": "Cortina de acero"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.45664,
                    "y": 0.86771
                },
                "text": "Emergencia"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.57188,
                    "y": 0.80174
                },
                "text": "Corrediza central"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.61289,
                    "y": 0.81563
                },
                "text": "Giratoria"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.64414,
                    "y": 0.78785
                },
                "text": "Antipánico"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.7457,
                    "y": 0.74965
                },
                "text": "Emergencia"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.8707,
                    "y": 0.78785
                },
                "text": "M3Bar"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.93125,
                    "y": 0.81563
                },
                "text": "Widebar"
            })
        ]);
    }
    
    // Aeropuerto
    const residenciaImg = document.getElementById('img-residencia');
    if (residenciaImg)
    {
        const residencia = new Taggd(residenciaImg, options, 
        [         
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.77422,
                    "y": 0.44757
                },
                "text": "GH250"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.64531,
                    "y": 0.49271
                },
                "text": "Raised panel"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.77813,
                    "y": 0.5934
                },
                "text": "Overlay"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.77422,
                    "y": 0.74618
                },
                "text": "Wingo"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.53984,
                    "y": 0.78785
                },
                "text": "Run 1800"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.01328,
                    "y": 0.71146
                },
                "text": "M3Bar"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.09922,
                    "y": 0.63507
                },
                "text": "Wide Bar"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.43125,
                    "y": 0.39201
                },
                "text": "Motores tubulares"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.57969,
                    "y": 0.80521
                },
                "text": "Rolling Center"
            })  
        ]);
    }
    
    // Aeropuerto
    const aeropuertoImg = document.getElementById('img-aeropuertos');
    if(aeropuertoImg)
    {
        const aeropuerto = new Taggd(aeropuertoImg, options, 
        [         
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.21172,
                    "y": 0.36076
                },
                "text": "Antipánico"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.29375,
                    "y": 0.40938
                },
                "text": "Antipánico"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.39531,
                    "y": 0.45451
                },
                "text": "Antipánico"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.53594,
                    "y": 0.52396
                },
                "text": "Lateral central automática"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.46953,
                    "y": 0.5934
                },
                "text": "ExpressGate"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.56016,
                    "y": 0.66979
                },
                "text": "Lateral corrediza"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.56797,
                    "y": 0.76701
                },
                "text": "Gran diámetro"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.66563,
                    "y": 0.66979
                },
                "text": "Gran diámetro"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.76914,
                    "y": 0.53785
                },
                "text": "Automáticas corredizas"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.85508,
                    "y": 0.43368
                },
                "text": "Automáticas corredizas laterales"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.79063,
                    "y": 0.36076
                },
                "text": "Torán"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.87656,
                    "y": 0.23924
                },
                "text": "100 SR"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.63633,
                    "y": 0.22188
                },
                "text": "Emergencia"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.56406,
                    "y": 0.21146
                },
                "text": "Automáticas batientes"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.41563,
                    "y": 0.23576
                },
                "text": "Madera"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.47813,
                    "y": 0.26007
                },
                "text": "Madera"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.53281,
                    "y": 0.2809
                },
                "text": "Madera"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.57969,
                    "y": 0.30868
                },
                "text": "Madera"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.64609,
                    "y": 0.32951
                },
                "text": "Madera"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.69297,
                    "y": 0.34688
                },
                "text": "Slimgate"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.47227,
                    "y": 0.86076
                },
                "text": "M3Bar"
            })  
        ]);
    }
    
    // Industria
    const industriaImg = document.getElementById('img-industria');
    if(industriaImg)
    {
        const industria = new Taggd(industriaImg, options, 
        [         
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.06328,
                    "y": 0.48229
                },
                "text": "bitport exterior"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.18633,
                    "y": 0.43368
                },
                "text": "cortina de acero"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.32109,
                    "y": 0.41979
                },
                "text": "Puertas Rápidas Autorreparables 100SR"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.57695,
                    "y": 0.33299
                },
                "text": "Puertas Rápidas Biport Cortafuegos"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.65117,
                    "y": 0.37813
                },
                "text": "Puertas Rápidas Autorreparable Frigorífica 104"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.73594,
                    "y": 0.41285
                },
                "text": "Biport Frigo"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.87266,
                    "y": 0.45451
                },
                "text": "Rampa Hidráulica"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.72813,
                    "y": 0.53785
                },
                "text": "Sistema Antipánico"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.44492,
                    "y": 0.57951
                },
                "text": "Gancho para retención de Andén TPR Unlock"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.38047,
                    "y": 0.62118
                },
                "text": "Shelter Inflable Ajustable"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.30625,
                    "y": 0.64896
                },
                "text": "Rampa Mecánica"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.24961,
                    "y": 0.65243
                },
                "text": "Rampa hidráulica"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.16563,
                    "y": 0.67674
                },
                "text": "Salida de emergencia"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                    "x": 0.07773,
                    "y": 0.5934
                },
                "text": "Rampa de tijera"
            }) 
        ]);
    }
    
    // Autoservicio
    const autoservicioImg = document.getElementById('img-autoservicio');
    if(autoservicioImg)
    {
        const autoservicio = new Taggd(autoservicioImg, options, 
        [         
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.08359,
                "y": 0.56563
                },
                "text": "Bitport Exterior"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.1832,
                "y": 0.49271
                },
                "text": "Cortina de Acero"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.3375,
                "y": 0.48229
                },
                "text": "Autoreparable 100SR"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.57188,
                "y": 0.52396
                },
                "text": "Puerta Cortafuego"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.63438,
                "y": 0.47535
                },
                "text": "Puerta de HCG-10"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.63125,
                "y": 0.18715
                },
                "text": "Puerta de Acero"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.67813,
                "y": 0.23229
                },
                "text": "Puerta de Acero"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.74063,
                "y": 0.26354
                },
                "text": "Puerta de Madera"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.81094,
                "y": 0.30521
                },
                "text": "Puerta de Madera"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.85,
                "y": 0.51701
                },
                "text": "Bitport Frigo"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.88125,
                "y": 0.67674
                },
                "text": "Sistema Antipánico"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.75234,
                "y": 0.77396
                },
                "text": "Puerta Corrediza Central"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.59609,
                "y": 0.82951
                },
                "text": "Salidas de Emergencia"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.49063,
                "y": 0.73924
                },
                "text": "Shelter Inflable Ajustable"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.33438,
                "y": 0.58646
                },
                "text": "Rampa Hidráulica"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.26406,
                "y": 0.6316
                },
                "text": "Rampa Vertical"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.26992,
                "y": 0.71146
                },
                "text": "Gancho para retencian de andén tp Unlock"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.20156,
                "y": 0.70451
                },
                "text": "Rampa Mecánica"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.13516,
                "y": 0.73924
                },
                "text": "Gancho para retención de andén stop tite automático"
            }),
            
            Taggd.Tag.createFromObject({
                "position": {
                "x": 0.15859,
                "y": 0.81563
                },
                "text": "Rampa de tijera"
            }) 
        ]);
    }
    
</script>
@endsection