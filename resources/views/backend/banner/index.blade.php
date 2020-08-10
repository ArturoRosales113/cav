@extends('backend.layouts.app')

@section('page_title')
Banners
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('banner.create') }}"><i
        class="fas fa-plus-square"></i>&nbsp;Crear Banner</a>
@endsection

@section('content')
<div class="row my-5 justify-content-center">
    <div class="col-12 col-lg-10">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach ($families as $fam)
            <li class="nav-item">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $fam->name.'-tab' }}" data-toggle="tab" href="#{{ $fam->name }}" role="tab" aria-controls="{{ $fam->name }}" aria-selected="true">
                    {{ ucfirst($fam->display_name) }}
                </a>
            </li>
            @endforeach
          </ul>
          <div class="tab-content pt-5" id="myTabContent">
            @foreach ($families as $fam)
            <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $fam->name }}" role="tabpanel" aria-labelledby="{{ $fam->name.'-tab' }}">
              <div class="accordion" id="{{ $fam->name.'accordion' }}"> 
               
                @foreach ($fam->banners as $c)
            <li class="list-group-item d-block justify-content-between align-items-center">
                <div class="row">
                    <div class="col-3">
                        <img src="{{ $c->img_path == null ? asset('img/brand/no_img_found.png') : asset($c->img_path) }}"
                            class="img-fluid" alt="">
                    </div>
                    <div class="col-9">
                        <h5>{{ $c->titulo }}</h5>
                        <p>
                            {{$c->url}}
                        </p>
                        <div class="row align-items-stretch justify-content-end">
                            <form action="{{ route('banner.destroy', $c->id) }}" method="POST">
                                @method('delete')
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete" />
                                <button type="submit" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
           
              </div>
  
  
            </div>
            @endforeach           
          </div>
    </div>
  </div>

@endsection