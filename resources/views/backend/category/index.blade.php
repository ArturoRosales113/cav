@extends('backend.layouts.app')

@section('page_title')
Categorías
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-success text-white" href="{{ route('category.create') }}"><i class="fas fa-plus-square"></i>&nbsp;Crear categoría</a>
@endsection

@section('content')
    @include('backend.layouts.products_dashboard_menu')
    <div class="row justify-content-center p-4">
        <div class="col-10 col-lg-10">
            <div class="list-group-flush">
                @foreach ($categories as $c)
                <li class="list-group-item d-block justify-content-between align-items-center">
                    <div class="row">
                        <div class="col-3">
                            <img src="{{ $c->img_path == null ? asset('img/brand/no_img_found.png') : asset($c->img_path) }}" class="img-fluid" alt="">
                        </div>
                        <div class="col-9">
                            <h5>{{ $c->display_name }}</h5>
                            <p>
                                {{$c->description}}
                            </p>
                            <div class="row align-items-stretch justify-content-end">
                                <a class="btn btn-info ml-2" href="{{route('category.edit',$c -> id)}}">
                                    <i class="fa fa-edit"></i>
                                   </a>

                                   <a class="btn btn-warning ml-2" href="{{route('category.show',$c -> id)}}">
                                    <i class="fas fa-eye"></i>
                                   </a>

                                    <button
                                        type="button"
                                        class="btn btn-danger ml-2"
                                        data-toggle="modal"
                                        data-target="#destroyModal"
                                        data-route="{{ route('category.destroy',$c -> id ) }}"
                                        data-title="{{ $c->display_name }}"
                                        data-id="{{ $c->id }}"
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
<div class="modal fade" id="destroyModal" tabindex="-1" role="dialog" aria-labelledby="destroyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="destroyModalLabel">Eliminar </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <h5>¿Qué deseas hacer con los productos dentro de <strong id="destroyTitle"></strong> ?</h5>
            <form id="destroyModalForm" action="" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="delete" />
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text bg-warning text-white">
                        <input type="radio" name="transfer" value="true" checked>
                        <label class="form-check-label" for="transfer">
                           &nbsp; Transferir a
                          </label>
                      </div>
                    </div>
                    <select class="custom-select" name="category_id" id="destroyModalFormSelect">
                        <option value="null">Ninguna (Se agruparán en 'N/A')</option>
                        @foreach ($categories as $cs)
                            <option value="{{ $cs->id }}">{{ $cs->display_name }}</option>
                        @endforeach
                    </select>
                  </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-danger text-white">
                          <input type="radio" name="transfer" value="false">
                          <label class="form-check-label " for="transfer">
                             &nbsp; No transferir
                            </label>
                        </div>
                      </div>
                      <span class="input-group-text bg-danger text-white" id="basic-addon3">Los Articulos serán eliminados.</span>

                  </div>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection


