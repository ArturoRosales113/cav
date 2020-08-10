@extends('backend.layouts.app')

@section('page_title')
Categorías
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('category.create') }}"><i
        class="fas fa-plus-square"></i>&nbsp;Crear categoría</a>
@endsection

@section('content')
    @include('backend.layouts.products_dashboard_menu')

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
                        @foreach ($fam->categories as $c)
                        <li class="list-group-item d-block justify-content-between align-items-center">
                            <div class="row">
                                <div class="col-3">
                                    <img src="{{ $c->icon_path == null ? asset('img/brand/no_img_found.png') : asset($c->icon_path) }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="col-9">
                                    <h5>{{ ucwords($c->display_name) }}</h5>
                                    <p>
                                        {{$c->description}}
                                    </p>
                                    <div class="row align-items-stretch justify-content-end">
        
            
                                        <a class="btn btn-warning ml-2" href="{{route('category.show',$c -> id)}}">
                                            <i class="fas fa-eye"></i>
                                        </a>
            
                                        <button type="button" class="btn btn-danger ml-2" data-toggle="modal"
                                            data-target="#destroyModal" data-route="{{ route('category.destroy',$c -> id ) }}"
                                            data-title="{{ $c->display_name }}" data-id="{{ $c->id }}">
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
@include('backend.layouts.slices.destroyModal', ['model' => $categories])
@endsection