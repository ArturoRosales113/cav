@extends('frontend.layouts.app')

@section('page_banner')
<div class="row">
    <div class="col-12 p-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="http://lorempixel.com/1920/1080/technics/" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://lorempixel.com/1920/1080/technics/" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="http://lorempixel.com/1920/1080/technics/" alt="Third slide">
              </div>
            </div>
          </div>
    </div>
</div>

@endsection


@section('content')
<div class="row justify-content-center py-5">
    <div class="col-10">
        <div class="row">
            <div class="col-3 text-center">
                <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
            <div class="col-3 text-center">
                <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
            <div class="col-3 text-center">
                <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
            <div class="col-3 text-center">
                <img src="http://lorempixel.com/600/600/technics/" alt="" class="img-fluid">
                <h6>Lorem, ipsum dolor.</h6>
            </div>
        </div>
    </div>
</div>

<div class="row py-5">
    <div class="col-12 p-0">
        <div id="coruselTexto" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item  bg-dark active">
                <div class="row justify-content-center py-5">
                    <div class="col-8">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus placeat sunt, accusantium atque adipisci recusandae.</p>
                    </div>
                </div>
              </div>
              <div class="carousel-item bg-dark ">
                <div class="row justify-content-center py-5">
                    <div class="col-8">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus placeat sunt, accusantium atque adipisci recusandae.</p>
                    </div>
                </div>
              </div>
              <div class="carousel-item bg-dark ">
                <div class="row justify-content-center py-5">
                    <div class="col-8">
                        <h4>Lorem ipsum dolor sit amet.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus placeat sunt, accusantium atque adipisci recusandae.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

<div class="row justify-content-center py-5">
    <div class="col-12 col-lg-10 text-center p-0">
       <h5>Lorem</h5>
       <div class="row justify-content-around">
           <img src="{{ asset('img/front/Logos.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_1.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_2.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_3.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_4.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_5.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_6.png') }}" width="40px">
           <img src="{{ asset('img/front/Logos_8.png') }}" width="40px">
       </div>
    </div>
</div>
@endsection
