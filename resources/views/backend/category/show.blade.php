@extends('backend.layouts.app')



@section('page_title')
{{ $category->display_name }}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('category.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de familias
</a>
@endsection


@section('content')
<div class="row justify-content-center">
    <div class="col-lg-11">
        <div class="card mb-5">
            <img class="img-fluid" src="{{ $category->img_path == null ? asset('img/brand/no_img_found.png') : asset($category->img_path)  }}" alt="Card image">
            <div class="card-body">
                <div class="row">
                    <div class="col-3 text-center">
                        <h4 class="card-title">{{ $category->display_name }}</h4>
                        <p class="card-text">
                            {{ $category->description }}
                        </p>
                        <img class="img-fluid" src="{{ $category->icon_path == null ? asset('img/brand/no_img_found.png') : asset($category->icon_path)  }}" alt="Card image">
                        <div class="row justify-content-center py-4">
                            <a class="btn btn-info ml-2" href="{{route('family.edit',$category -> id)}}">
                                <i class="fa fa-edit"></i>
                               </a>
                                <button
                                    type="button"
                                    class="btn btn-danger ml-2"
                                    data-toggle="modal"
                                    data-target="#familyDestroyModal"
                                    data-route="{{ route('family.destroy',$category -> id ) }}"
                                    data-title="{{ $category->name }}"
                                    data-id="{{ $category->id }}"
                                    >
                                    <i class="fas fa-times"></i>
                                </button>
                        </div>
                    </div>
                    <div class="col-9">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h3>Productos</h3>
                            </li>
                            @foreach ($category->articles() as $fa)
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-4"></div>
                                    <div class="col-8">
                                        <h5>{{ $fa->name }}</h5>
                                        <p>{{ $fa->description }}</p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection


@section('modals')
    @include('backend.layouts.slices.destroyModal', ['model' => $categories])
@endsection
