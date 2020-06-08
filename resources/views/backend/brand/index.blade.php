@extends('backend.layouts.app')

@section('page_title')
Marcas
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('brand.create') }}"><i class="fas fa-plus-square"></i>&nbsp;Crear marca</a>
@endsection

@section('content')
    @include('backend.layouts.products_dashboard_menu')
    <div class="row justify-content-center p-4">
        <div class="col-10 col-lg-10">
            <div class="list-group-flush">
                @foreach ($brands as $b)
                <li class="list-group-item d-block justify-content-between align-items-center">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ $b->img_path == null ? asset('img/brand/no_img_found.png') : asset($b->img_path) }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-9">
                            <h5>{{ $b->display_name }}</h5>
                            <p>
                                {{$b->description}}
                            </p>
                            <div class="row align-items-stretch justify-content-end">
                                <a class="btn btn-info ml-2" href="{{route('brand.edit',$b -> id)}}">
                                    <i class="fa fa-edit"></i>
                                   </a>

                                   <a class="btn btn-warning ml-2" href="{{route('brand.show',$b -> id)}}">
                                    <i class="fas fa-eye"></i>
                                   </a>

                                    <button
                                        type="button"
                                        class="btn btn-danger ml-2"
                                        data-toggle="modal"
                                        data-target="#destroyModal"
                                        data-route="{{ route('brand.destroy',$b -> id ) }}"
                                        data-title="{{ $b->display_name }}"
                                        data-id="{{ $b->id }}"
                                        >
                                        <i class="fas fa-times"></i>
                                    </button>


                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
              </div>
        </div>
      </div>

@endsection

@section('modals')
    @include('backend.layouts.slices.destroyModal', ['model' => $brands])
@endsection


