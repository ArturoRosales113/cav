@extends('backend.layouts.app')


@section('page_title')
Editar {{$brand->display_name}}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('brand.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de familias
</a>
@endsection



@section('content')
<div class="row justify-content-center pt-5">
    <div class="col-12 col-lg-8">
        <form action="{{route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put" />
                <div class="form-group col-12">
                    <label for="name">Nombre*</label>
                    <input type="text" name="name" value="{{ old('name',$brand->display_name ) }}" placeholder="Nombre" class="form-control">
                    @if ($errors->has('name'))
                    <span class="help-block">
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </span>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="description">Descripción*</label>
                    <textarea name="description" id="" class="form-control" cols="10" placeholder="Descripción" rows="10">{{ old('description',$brand->description ) }}</textarea>
                    @if ($errors->has('description'))
                    <span class="help-block">
                            <small class="text-danger">{{ $errors->first('description') }}</small>
                        </span>
                    @endif
                </div>

                <div class="w-100"></div>
                <div class="col-4 text-center bg-light">
                    <img src="{{ $brand->icon_path == null ? asset('img/brand/no_img_found.png') : asset($brand->icon_path) }}" class="img-fluid" id="formLogoPreview" alt="">
                    @if ( $brand->icon_path != null)
                    <a class="btn btn-danger" href="{{ route('brand.icon.delete', $brand->id) }}" ><i class="fas fa-trash"></i></a>
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
                    <img src="{{ $brand->img_path == null ? asset('img/brand/no_img_found.png') : asset($brand->img_path) }}" class="img-fluid mb-2" id="formPhotoPreview" alt="">
                    @if ( $brand->img_path != null)
                    <a class="btn btn-danger" href="{{ route('brand.photo.delete', $brand->id) }}" ><i class="fas fa-trash"></i></a>
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

