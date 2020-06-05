@extends('backend.layouts.app')



@section('page_title')
{{ $family->display_name }}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('family.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de familias
</a>
@endsection


@section('content')
<div class="row">
    <div class="col-10 col-lg-4">
        <div class="card">
            <img class="card-img-top" src="{{ $family->icon_path == null ? asset('img/brand/no_img_found.png') : asset($family->icon_path)  }}" alt="Card image">
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title">{{ $family->display_name }}</h5>
                        <p class="card-text">
                            {{ $family->description }}
                        </p>
                    </div>
                </div>
            </div>
          </div>
          <div class="row pt-2 justify-content-end">
            <a class="btn btn-info ml-2" href="{{route('family.edit',$family -> id)}}">
                <i class="fa fa-edit"></i>
               </a>
                <button
                    type="button"
                    class="btn btn-danger ml-2"
                    data-toggle="modal"
                    data-target="#familyDestroyModal"
                    data-route="{{ route('family.destroy',$family -> id ) }}"
                    data-title="{{ $family->name }}"
                    data-id="{{ $family->id }}"
                    >
                    <i class="fas fa-times"></i>
                </button>
          </div>
    </div>
    <div class="col">
        <img class="img-fluid w-100" src="{{ $family->img_path == null ? asset('img/brand/no_img_found.png') : asset($family->img_path)  }}" alt="Card image">
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-10">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h3>Productos</h3>
            </li>
            @foreach ($family->articles() as $fa)
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
@endsection



@section('modals')
<div class="modal fade" id="familyDestroyModal" tabindex="-1" role="dialog" aria-labelledby="familyDestroyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="familyDestroyModalLabel">Eliminar </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
            <h5>¿Qué deseas hacer con los productos dentro de <strong id="FamilyDestroyTitle"></strong> ?</h5>
            <form id="familyDestroyModalForm" action="" method="POST">
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
                    <select class="custom-select" name="family_id" id="familyDestroyModalFormSelect">
                        <option value="null">Ninguna (Se agruparán en 'N/A')</option>
                        @foreach ($families as $fs)
                            <option value="{{ $fs->id }}">{{ $fs->display_name }}</option>
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
