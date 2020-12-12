@extends('frontend.layouts.app')


@section('content')
<div class="row justify-content-center py-5">
    <div class="col-10">
        <div class="row justify-content-between">

            <div class="nav flex-column nav-pills col-10 col-lg-2 text-center" id="v-proyects-tab" role="tablist"
                aria-orientation="vertical">
                @foreach ($fam->aplications as $a)
                <a class="pav-pill white mb-3 shadow {{ $loop->first ? 'active' : '' }} border-0" id="{{ 'v-pills-home-tab'.$a->name  }}"
                    data-toggle="pill" href="{{ '#v-pills-'.$a->name }}" role="tab" aria-controls="{{ 'v-pills-'. $a->name }}"
                    aria-selected="{{ $loop->first ? 'true' : '' }}">{{ ucFirst($a->display_name) }}</a>
                @endforeach
               
                    <a href="{{ route('front.contacto') }}" class="pav-pill gray shadow mt-4">
                        Contáctanos
                    </a>
           
            </div>
        
            <div class="tab-content col-9 bg-white" id="v-pills-tabContent">
                @foreach ($fam->aplications as $a)
                <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ 'v-pills-'.$a->name }}" role="
                    tabpanel" aria-labelledby="{{ 'v-pills-home-tab'.$a->name  }}">
                 
                    <div class="row ">
                        @foreach ($a->proyects as $pt)
                        <div class="col-10 col-lg-6">
                            <div class="row justify-content-center py-3">
                                <div class="col-5">
                                    <img src="{{ $pt->img_path == null ? asset('img/brand/no_img_found.png') : asset($pt->img_path) }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-7">
                                   
                                    <h5 class="bold">
                                        <small>{{ ucfirst($pt->date) }}</small> <br>
                                        {{ $pt->name }}</h5>
                                        <button type="button" class="pav-pill gray shadow" data-toggle="modal" data-target="#pyctModal" data-whatever="{{ asset($pt->pdf_path) }}">Ficha Técnica</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
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