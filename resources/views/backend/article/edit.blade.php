<form action="{{ route('article.update', $article->id) }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put" />

    <div class="row align-items-center">
        <div class="form-group col-6">
            <label for="name">Nombre del producto</label>
            <input type="text" name="name" value="{{ old('name', $article->name ) }}" placeholder="Nombre"
                class="form-control">
            @if ($errors->has('name'))
            <span class="help-block">
                <small class="text-danger">{{ $errors->first('name') }}</small>
            </span>
            @endif
        </div>
        <div class="form-group col-6">
            <label for="code">Código de identificación</label>
            <input type="text" name="code" value="{{ old('code', $article->code) }}" placeholder="Codigo (opcional)"
                class="form-control">
            @if ($errors->has('code'))
            <span class="help-block">
                <small class="text-danger">{{ $errors->first('code') }}</small>
            </span>
            @endif
        </div>
        <div class="form-group col-12">
            <label for="description">Texto de previsualización</label>
            <textarea name="preview" id="" class="form-control" cols="30" placeholder="Descripción"
                rows="2">{{ old('preview',  $article->preview) }}</textarea>
            @if ($errors->has('preview'))
            <span class="help-block">
                <small class="text-danger">{{ $errors->first('preview') }}</small>
            </span>
            @endif
        </div>
        <div class="form-group col-12">
            <label for="description">Descripción</label>
            <textarea name="description" id="" class="form-control" cols="30" placeholder="Descripción"
                rows="2">{{ old('description', $article->description) }}</textarea>
            @if ($errors->has('description'))
            <span class="help-block">
                <small class="text-danger">{{ $errors->first('description') }}</small>
            </span>
            @endif
        </div>
        <div class="form-group col-12">
            <label for="description">Especificaciones</label>
            <textarea name="specs" id="" class="form-control" cols="30"
                placeholder="Especificiones (separadas por coma)"
                rows="2">{{ old('specs', $article->specs) }}</textarea>
            @if ($errors->has('specs'))
            <span class="help-block">
                <small class="text-danger">{{ $errors->first('specs') }}</small>
            </span>
            @endif
        </div>
    </div>
    <div class="row align-items-center">
        <div class="form-group col-6">
            <label for="family_id">Categoría</label>
            <select class="custom-select" name="category_id">
                <option value="0">Ninguna</option>
                @foreach ($families as $f)
                <optgroup label="{{ ucfirst($f->display_name) }}">
                    @foreach ($f->categories as $cat)
                    <option value="{{ $cat->id }}"
                        {{ old('category_id', $article->category_id) == $cat->id ? 'selected' : ''}}>
                        {{ UCFIRST( $cat->display_name) }}
                    </option>
                    @endforeach
                </optgroup>
                @endforeach
            </select>
            @if ($errors->has('category'))
            <span class="help-block">
                <small class="text-danger">{{ $errors->first('category') }}</small>
            </span>
            @endif
        </div>

        <div class="custom-control custom-checkbox form-group col-12 text-center py-2">
            <input type="checkbox" class="custom-control-input" id="is_trend" name="is_trend"
                {{ $article->is_trend ? 'checked' : '' }}>
            <label class="custom-control-label" for="is_trend">Marcar como destacado</label>
        </div>
        <div class="custom-control custom-checkbox form-group col-12 text-center py-2">
            <input type="checkbox" class="custom-control-input" id="is_new" name="is_new"
                {{ $article->is_new ? 'checked' : '' }}>
            <label class="custom-control-label" for="is_new">Marcar como artículo nuevo</label>
        </div>
        <div class="form-group col-12 text-center">
            <button class="btn btn-lg btn-secondary">Guardar cambios</button>
        </div>
    </div>


</form>