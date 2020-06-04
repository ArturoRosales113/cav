@extends('backend.layouts.app')


@section('page_title')
Crear Familia
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('family.index') }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de familias
</a>
@endsection



@section('content')

    <div class="row justify-content-center pt-5">
        <div class="col-12 col-lg-8">
            @if($errors)
                @foreach ($errors->all() as $message)
                    <span>{{$message}}</span>
                    @if(!$loop->last)
                        <br>
                    @endif
                @endforeach
            @endif
            <form action="{{ route('family.store') }}" method="POST">
                <div class="row justify-content-start">
                    {{ csrf_field() }}
                    <div class="form-group col-12">
                        <label for="name">Nombre*</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre" class="form-control">
                        @if ($errors->has('name'))
                        <span class="help-block">
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </span>
                        @endif
                    </div>
                    <div class="form-group col-12">
                        <label for="description">Descripción*</label>
                        <textarea name="description" id="" class="form-control" cols="10" placeholder="Descripción" rows="10">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                        <span class="help-block">
                                <small class="text-danger">{{ $errors->first('description') }}</small>
                            </span>
                        @endif
                    </div><div class="w-100"></div>
                    <div class="col-6"></div>
                    <div class="form-group col-6">
                        <h6>Icono</h6>
                        <hr>
                        <label for="exampleFormControlFile1">Subir png</label>
                        <input type="file" class="form-control-file" id="logo" name="logo">
                      </div>
                    <div class="w-100"></div>
                    <div class="col-6"></div>
                    <div class="form-group col-6">
                        <h6>Imagen</h6>
                        <hr>
                        <label for="exampleFormControlFile1">Subir fotografia 16:9</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                      </div>
                    <div class="form-group py-3 col-12 text-right">
                        <button class="btn btn-lg btn-secondary">Crear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
