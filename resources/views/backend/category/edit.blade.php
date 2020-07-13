@extends('backend.layouts.app')


@section('page_title')
Editar {{$category->display_name}}
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('category.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de categorias
</a>
@endsection



@section('content')
<div class="row justify-content-center pt-5">
    <div class="col-12 col-lg-8">
        <form action="{{route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put" />
                <div class="form-group col-12">
                    <label for="name">Nombre*</label>
                    <input type="text" name="name" value="{{ old('name',$category->display_name ) }}"
                        placeholder="Nombre" class="form-control">
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </span>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="description">Descripción*</label>
                    <textarea name="description" id="" class="form-control" cols="10" placeholder="Descripción"
                        rows="10">{{ old('description',$category->description ) }}</textarea>
                    @if ($errors->has('description'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('description') }}</small>
                    </span>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="family_id">Familia</label>
                    <select class="custom-select" name="family_id">
                        <option value="0">Ninguna</option>
                        @foreach ($families as $fam)
                        <option value="{{ $fam->id }}"
                            {{ old('family_id',$category->family_id) == $fam->id ? 'selected' : ''}}>
                            {{ ucfirst($fam->display_name) }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('family'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('family') }}</small>
                    </span>
                    @endif
                </div>

                <div class="w-100"></div>
                <div class="col-4 text-center bg-light">
                    <img src="{{ $category->icon_path == null ? asset('img/brand/no_img_found.png') : asset($category->icon_path) }}"
                        class="img-fluid" id="formLogoPreview" alt="">
                    @if ( $category->icon_path != null)
                    <a class="btn btn-danger" href="{{ route('category.icon.delete', $category->id) }}"><i
                            class="fas fa-trash"></i></a>
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
                    <img src="{{ $category->img_path == null ? asset('img/brand/no_img_found.png') : asset($category->img_path) }}"
                        class="img-fluid mb-2" id="formPhotoPreview" alt="">
                    @if ( $category->img_path != null)
                    <a class="btn btn-danger" href="{{ route('category.photo.delete', $category->id) }}"><i
                            class="fas fa-trash"></i></a>
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