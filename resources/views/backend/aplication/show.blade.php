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
    <div class="col-10">
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

<div class="row justify-content-center pb-5">
   <div class="col-10">
       <div class="card">
           <div class="card-header">
                <h5 class="card-title">Agregar Productos</h5>
           </div>
           <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <select class="form-control form-control">
                            <option>Seleccionar Producto</option>
                            @foreach($articles as $art)
                            <option value="{{ $art->id }}"> {{ $art->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Subir imagen</label>
                        <input type="file" class="form-control-file" name="img_path">
                    </div>
                </form>
           </div>
       </div>
   </div>
</div>

@endsection
