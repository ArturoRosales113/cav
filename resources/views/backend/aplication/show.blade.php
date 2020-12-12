@extends('backend.layouts.app')

@section('page_title')
{{ $aplication->display_name }}
@endsection

@section('dashboard_buttons')
<a class="btn btn-sm btn-secondary" href="{{ route('aplication.index') }}">
    <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de aplicacione
</a>
@endsection

@section('content')

<div class="row justify-content-center py-3">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    Editar información
                </h4>
            </div>
            <div class="card-body">
                @include('backend.aplication.edit', ['families' => $families])
            </div>

        </div>
    </div>
</div>

<div class="row justify-content-center py-3">
    <div class="col-12 col-lg-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Agregar Productos</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('aplication.article.add', $aplication->id) }}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-12">
                            <select class="form-control form-control" name="article_id">
                                <option value="0">Seleccionar Producto</option>
                                @foreach($categories as $c)
                                <optgroup label="{{ ucfirst($c->display_name) }}">
                                    @foreach ($c->articles as $ca)
                                    @if(!$aplication->articles->contains($ca->id))
                                    <option value="{{ $ca->id }}" {{ old('article_id') ? 'selected' : ''}}>
                                        {{ ucfirst( $ca->name) }}
                                    </option>
                                    @endif
                                    @endforeach
                                </optgroup>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" name="article_description" id="" class="form-control"
                                placeholder="Descripción (opcional)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center bg-light">
                            {{-- <img src="{{ $aplication->img_path == null ? asset('img/brand/no_img_found.png') : asset($aplication->img_path) }}"
                                class="img-fluid mb-2" id="aplication_articlePhotoPreview" alt=""> --}}

                        </div>
                        {{-- <div class="form-group col-12 py-2">
                            <h6>Imagen</h6>
                            <hr>
                            <label for="exampleFormControlFile1">Subir fotografia 16:9</label>
                            <input type="file" class="form-control-file" id="photo" name="article_img_path">
                        </div> --}}
                    </div>
                    <div class="row py-2">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-secondary">Agregar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Productos Relacionados
                </h5>
            </div>
            <div class="card-body">
                <ul class="list-unstyled">
                    @foreach ($aplication->articles as $aa)
                    <li class="media py-2">
                        {{-- <img src="{{ asset($aa->pivot->img_path) }}" class="mr-3" alt="..." height="90px"> --}}
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"> {{$aa->name}}</h5>
                            <p> {{ $aa->pivot->description }}</p>
                        </div>
                        <div class="d-flex flex-column">
                            <form action="{{ route('aplication.article.remove', $aplication -> id) }}" method="POST"
                                class="form">
                                {{ csrf_field() }}
                                <input type="hidden" name="article_id" value="{{ $aa->id }}">
                                <input type="hidden" name="delete_path" value="{{ $aa->pivot->img_path }}">
                                <button type="submit" class="btn btn-outline-danger"><i class="fas fa-times"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection