@extends('backend.layouts.app')


@section('page_title')
Editar Banner
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('banner.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de banners
</a>
@endsection



@section('content')
<div class="row justify-content-center pt-5">
    <div class="col-12 col-lg-10">
        <form action="{{ route('banner.update', $banner->id) }}" class="form" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put" />
            <div class="row align-items-center">
                <div class="form-group col-12">
                    <input type="text" name="titulo" placeholder="Título" value="{{ old('titulo', $banner->titulo) }}" class="form-control">
                </div>
                <div class="form-group col-12">
                    <input type="text" name="url" placeholder="Link" value="{{ old('link', $banner->url) }}" class="form-control">
                </div>
                <div class="form-group col-12">
                    <input type="text" name="descripcion" placeholder="Descripción" value="{{ old('descripcion', $banner->descripcion) }}" class="form-control">
                </div>
                <div class="form-group col-12">
                    <label for="family_id">Familia</label>
                    <select class="custom-select" name="family_id">
                        <option value="0">Ninguna</option>
                        @foreach ($families as $fam)
                        <option value="{{ $fam->id }}" {{ $fam->id == $banner->family_id ? 'selected' : ''}}>
                            {{ ucfirst($fam->display_name) }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('family'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('family') }}</small>
                    </span>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset($banner->img_path) }}" alt="" class="img-fluid" id="formPhotoPreview">
                </div>
                <div class="form-group col-6">
                    <h6>Imagen</h6>
                    <hr>
                    <label for="exampleFormControlFile1">Subir fotografia 16:9</label>
                    <input type="file" class="form-control-file" id="photo" name="img_path">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 text-center">
                    <button type="submit" class="btn btn-secondary">
                        Eitar Banner
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection