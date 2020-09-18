@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center proyects align-items-center">
    <div class="col-10 text-center">
        <h4 class="bold text-white text-uppercase">
            Nuestros Proyectos
        </h4>
    </div>
</div>
<div class="row justify-content-center pt-5 bg3">

    <div class="nav flex-column nav-pills col-10 col-lg-3 text-center bg3" id="v-proyects-tab" role="tablist"
        aria-orientation="vertical">
        @foreach ($aplications as $a)
        <a class="nav-link {{ $loop->first ? 'active' : '' }} border-0" id="{{ 'v-pills-home-tab'.$a->name  }}"
            data-toggle="pill" href="{{ '#v-pills-'.$a->name }}" role="tab" aria-controls="{{ 'v-pills-'. $a->name }}"
            aria-selected="{{ $loop->first ? 'true' : '' }}">{{ ucFirst($a->display_name) }}</a>
        @endforeach
        <div class="py-5 bg-white">
            <a href="{{ route('front.industrial.contacto') }}" class="btn btn-lg bg1 text-white">
                Contactanos
            </a>
        </div>
    </div>

    <div class="tab-content col pt-5 bg-white" id="v-pills-tabContent">
        @foreach ($aplications as $a)
        <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ 'v-pills-'.$a->name }}" role="
            tabpanel" aria-labelledby="{{ 'v-pills-home-tab'.$a->name  }}">
         
            <div class="row ">
                @foreach ($a->proyects as $pt)
                <div class="col-10 col-lg-6">
                    <div class="row justify-content-center py-3">
                        {{-- <div class="col-6">
                            <img src="{{ $pt->img_path == null ? asset('img/brand/no_img_found.png') : asset($pt->img_path) }}" alt="" class="img-fluid">
                        </div> --}}
                        <div class="col-6">
                           
                            <h5 class="bold mb-5">
                                <small>{{ ucfirst($pt->date) }}</small> <br>
                                {{ $pt->name }}</h5>
                                <button type="button" class="btn bg1 text-white" data-toggle="modal" data-target="#pyctModal" data-whatever="{{ asset($pt->pdf_path) }}">Ficha Técnica</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
        @endforeach
    </div>
</div>
<div class="row py-3">
 
</div>

<div class="modal fade" id="pyctModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="row">
              <div class="col-12 p-0">
                <img src="" alt="" id="pyctImg" class="w-100    ">
              </div>
          </div>
      </div>
    </div>
  </div>

@endsection