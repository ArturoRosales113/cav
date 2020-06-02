@extends('backend.layouts.app')


@section('page_title')
Crear Artículo
@endsection



@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('article.update', $article->id) }}">
 <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos
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
            <form action="{{ route('article.store') }}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre" class="form-control">
                        @if ($errors->has('name'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('name') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="code" value="{{ old('code') }}" placeholder="Codigo (opcional)" class="form-control">
                        @if ($errors->has('code'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('code') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="family" value="{{ old('family') }}" placeholder="Categoria" class="form-control">
                        @if ($errors->has('family'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('family') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="category" value="{{ old('category') }}" placeholder="Subcategoria" class="form-control">
                        @if ($errors->has('category'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('category') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="brand" value="{{ old('brand') }}" placeholder="Marca" class="form-control">
                        @if ($errors->has('brand'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('brand') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="" class="form-control" cols="30" placeholder="Descripción" rows="10">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('description') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-secondary">Crear</button>
                    </div>

            </form>
        </div>
    </div>

@endsection

