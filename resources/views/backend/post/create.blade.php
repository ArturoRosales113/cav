@extends('backend.layouts.app')

@section('page_title')
Crear Noticia
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary text-white" href="{{ route('post.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos
</a>
@endsection


@section('content')
<div class="row justify-content-center pt-5">
    <div class="col-12 col-lg-10">
        <form action="{{ route('post.store') }}" class="form" method="POST" enctype="multipart/form-data">
            <div class="row">
                {{ csrf_field() }}
                <div class="form-group col-6">
                    <label for="name">Nombre del producto</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre" class="form-control">
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    </span>
                    @endif
                </div>
                <div class="form-group col-6">
                    <label for="code">Código de identificación</label>
                    <input type="text" name="code" value="{{ old('code') }}" placeholder="Codigo (opcional)"
                        class="form-control">
                    @if ($errors->has('code'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('code') }}</small>
                    </span>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="description">Descripción</label>
                    <textarea name="description" id="" class="form-control" cols="30" placeholder="Descripción"
                        rows="2">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('description') }}</small>
                    </span>
                    @endif
                </div>
                <div class="form-group col-12">
                    <label for="description">Especificaciones</label>
                    <textarea name="specs" id="" class="form-control" cols="30"
                        placeholder="Especificiones (separadas por coma)" rows="2">{{ old('specs') }}</textarea>
                    @if ($errors->has('specs'))
                    <span class="help-block">
                        <small class="text-danger">{{ $errors->first('specs') }}</small>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row align-items-center">


                <div class="custom-control custom-checkbox form-group col-12 text-center p-3">
                    <input type="checkbox" class="custom-control-input" id="is_trend" name="is_trend">
                    <label class="custom-control-label" for="is_trend">Marcar como destacado</label>
                </div>
                <div class="form-group col-12 text-center">
                    <button class="btn btn-lg btn-secondary">Crear</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection