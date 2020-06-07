@extends('backend.layouts.app')


@section('page_title')
Editar {{$family->display_name}}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('family.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de familias
</a>
@endsection



@section('content')
<div class="row justify-content-center pt-5">
    <div class="col-12 col-lg-8">
        <form action="{{route('family.update', $family->id) }}" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put" />
                <div class="form-group col-12">
                    <label for="name">Nombre*</label>
                    <input type="text" name="name" value="{{ old('name',$family->display_name ) }}" placeholder="Nombre" class="form-control">
                    @if ($errors->has('name'))
                    <span class="help-block">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </span>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="description">Descripción*</label>
                    <textarea name="description" id="" class="form-control" cols="10" placeholder="Descripción" rows="10">{{ old('description',$family->description ) }}</textarea>
                    @if ($errors->has('description'))
                    <span class="help-block">
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        </span>
                    @endif
                </div><div class="w-100"></div>
                <div class="col-4 text-center bg-light">
                    <img src="{{ $family->icon_path == null ? asset('img/brand/no_img_found.png') : asset($family->icon_path) }}" class="img-fluid" id="familyFormLogoPreview" alt="">
                    @if ( $family->icon_path != null)
                    <a class="btn btn-danger" href="{{ route('family.icon.delete', $family->id) }}" ><i class="fas fa-trash"></i></a>
                    @endif
                </div>
                <div class="form-group col-6 ">
                    <h6>Icono</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir png</label>
                    <input type="file" class="form-control-file" id="logo" name="logo">
                  </div>
                <div class="w-100 py-3"></div>
                <div class="col-4 text-center bg-light">
                    <img src="{{ $family->img_path == null ? asset('img/brand/no_img_found.png') : asset($family->img_path) }}" class="img-fluid mb-2" id="familyFormPhotoPreview" alt="">
                    @if ( $family->img_path != null)
                    <a class="btn btn-danger" href="{{ route('family.photo.delete', $family->id) }}" ><i class="fas fa-trash"></i></a>
                    @endif
                </div>
                <div class="form-group col-6">
                    <h6>Imagen</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir fotografia 16:9</label>
                    <input type="file" class="form-control-file" id="photo" name="photo">
                  </div>
                <div class="form-group py-3 col-12 text-right">
                    <button role="submit" class="btn btn-lg btn-secondary">Guardar Cambios</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

