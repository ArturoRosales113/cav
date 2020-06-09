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
        <div class="col-12 col-lg-10">
            <form action="{{ route('article.update', $article->id) }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put" />

                    <div class="row align-items-center">
                    <div class="form-group col-6">
                        <label for="name">Nombre del producto</label>
                        <input type="text" name="name" value="{{ old('name', $article->name ) }}" placeholder="Nombre" class="form-control">
                        @if ($errors->has('name'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('name') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="code">Código de identificación</label>
                        <input type="text" name="code" value="{{ old('code', $article->code) }}" placeholder="Codigo (opcional)" class="form-control">
                        @if ($errors->has('code'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('code') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group col-12">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="" class="form-control" cols="30" placeholder="Descripción" rows="2">{{ old('description', $article->description) }}</textarea>
                        @if ($errors->has('description'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('description') }}</small>
                         </span>
                        @endif
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="form-group col-6">
                        <label for="family_id">Familia</label>
                        <select class="custom-select" name="family_id">
                            <option value="null">Ninguna</option>
                            @foreach ($families as $fam)
                                <option value="{{ $fam->id }}" {{ old('family_id', $article->family_id) == $fam->id ? 'selected' : ''}}>{{ $fam->display_name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('family'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('family') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="family_id">Categoría</label>
                        <select class="custom-select" name="category_id">
                        <option value="null">Ninguna</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $article->category_id) == $cat->id ? 'selected' : ''}}>{{ $cat->display_name }}</option>
                        @endforeach
                    </select>
                        @if ($errors->has('category'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('category') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="form-group col-6">
                        <label for="brand_id">Marca</label>
                        <select class="custom-select" name="brand_id">
                            <option value="null">Ninguna</option>
                            @foreach ($brands as $bds)
                                <option value="{{ $bds->id }}" {{ old('brand_id', $article->brand_id) == $bds->id ? 'selected' : ''}}>{{ $bds->display_name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('brand'))
                        <span class="help-block">
                             <small class="text-danger">{{ $errors->first('brand') }}</small>
                         </span>
                        @endif
                    </div>
                    <div class="custom-control custom-checkbox form-group col-6">
                        <input type="checkbox" class="custom-control-input" id="is_trend" name="is_trend">
                        <label class="custom-control-label" for="is_trend">Marcar como destacado</label>
                      </div>
                    <div class="form-group col-12">
                        <button class="btn btn-lg btn-secondary">Crear</button>
                    </div>
                </div>


            </form>
        </div>
    </div>

@endsection

