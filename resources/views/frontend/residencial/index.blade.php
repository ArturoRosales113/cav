@extends('frontend.layoutsR.app')



@section('content')
<section class="5">

    <div class="row mt-lg-5">
        <div class="col-12 p-0">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/banner-residencial.jpg') }}" alt="First slide">
                  </div>
                </div>
              </div>
        </div>
    </div>

    <div class="row justify-content-center py-5">
        <div class="col-10">
            <h4 class="bold text-dark text-center">
                Productos Más Populares
            </h4>
            <div class="row py-3">
                <div class="col-6 col-lg-3 text-center">
                    <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                    <span>Lorem, ipsum dolor.</span>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                    <span>Lorem, ipsum dolor.</span>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                    <span>Lorem, ipsum dolor.</span>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                    <span>Lorem, ipsum dolor.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center py-5 bg1">
        <div class="col-10 col-lg-5 text-center py-5">
            <h6 class="bold text-white text-uppercase py-3">
                ¿Quieres ser distribuidor?
            </h6>
            <form action="">
                <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Last name">
                    </div>
                    <div class="col">
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                    </div>
                    <div class="col">
                        <button class="btn bg-dark text-white w-100" type="submit">Enviar</button>
                    </div>
                  </div>
            </form>
        </div>
    </div>

    <div class="row bg3 justify-content-center align-items-center py-5">
        <div class="col-10">
            <div class="row align-items-center py-lg-3">
                <div class="col-3">
                    <h2 class="bold text-dark">
                        VENTAJAS <br> DE MOTORES <br> BATIENTES
                    </h2>
                    <a href="{{ route('front.residencial.contacto') }}" class="btn btn-lg bg1 text-white">Contáctanos</a>
                </div>
                <div class="col">
                    <p class="text-dark">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at
vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center py-5">
        <div class="col-10">
            <div class="row py-3">
                <div class="col-6 col-lg-3 text-center">
                    <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                    <span>Lorem, ipsum dolor.</span>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                    <span>Lorem, ipsum dolor.</span>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                    <span>Lorem, ipsum dolor.</span>
                </div>
                <div class="col-6 col-lg-3 text-center">
                    <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                    <span>Lorem, ipsum dolor.</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
