@extends('backend.layouts.app')

@section('page_title')
Aplicaciones
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('aplication.create') }}"><i
        class="fas fa-plus-square"></i>&nbsp;Crear Aplicación</a>
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
          <div class="tab-content" id="myTabContent">
            @foreach ($families as $fam)
            <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="{{ $fam->name }}" role="tabpanel" aria-labelledby="{{ $fam->name.'-tab' }}">
                <div class="list-group-flush py-5">
                    @foreach ($fam->aplications as $a)
                    <li class="list-group-item d-block justify-content-between align-items-center">
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ $a->img_path == null ? asset('img/brand/no_img_found.png') : asset($a->img_path) }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="col-9">
                                <h5>{{ ucfirst($a->display_name) }}</h5>
                                <p>
                                    {{$a->description}}
                                </p>
                                <div class="row align-items-stretch justify-content-end">
        
                                    <a class="btn btn-warning ml-2" href="{{route('aplication.show',$a -> id)}}">
                                        <i class="fas fa-eye"></i>
                                    </a>
        
                                    <button type="button" class="btn btn-danger ml-2" data-toggle="modal"
                                        data-target="#destroyModal" data-route="{{ route('aplication.destroy',$a -> id ) }}"
                                        data-title="{{ $a->display_name }}" data-id="{{ $a->id }}">
                                        <i class="fas fa-times"></i>
                                    </button>
        
        
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

@section('modals')
@include('backend.layouts.slices.destroyModalAplication')
@endsection