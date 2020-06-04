@extends('backend.layouts.app')
@section('page_styles')
{!!Html::style('css/colorpicker.css')!!}
@endsection
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
  <div class="header text-center ">
    <h2 class="title">Detalle de {{ $vestido -> titulo }}</h2>
    <a class="text-white" href="{{ route('article.index') }}">
      <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de articulos</a>
  </div>
</div>
<!-- Header -->
<!-- contenido -->
<div class="content">
  <div class="row justify-content-center mt-5">
    <div class="col-md-12 col-lg-4">
      <div class="card">
        <div class="card-body p-4">
          <div class="row align-items-start">
            <div class="col-md-12 text-left">
              <div class="row">
                <div class="col">
                  <h4>{{$vestido->titulo}}</h4>
                  <p>{{ $vestido->description }}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-lg-6 text-left">
                      <h6>Códido de vestido</h6>
                      @if ($vestido->concept_id != null)
                      <a href="{{ route('concept.show',$vestido->concept->id) }}" class="btn btn-link">{{ $vestido->concept->display_name }}</a>
                      @else
                      No definido
                      @endif
                      <hr>
                      <h6>Clasificación</h6>
                      @if ($vestido->clasification != null)
                      <a href="{{ route('clasification.show',$vestido->clasification->id) }}" class="btn btn-link">{{ $vestido->clasification->display_name }}</a>
                      @else
                      No definido
                      @endif
                    </div>
                    <div class="col-12 col-lg-6 text-left">
                      <h6>Marcado como tendencia</h6>
                      {!! $vestido -> is_trend == 1 ? '<i class="far fa-check-square text-success"></i>': '<i class="far fa-times-circle text-danger"></i>'  !!}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    {{-- <div class="col text-center">
                      <h6>Marca</h6>
                      @if ($vestido->marca_id != null)
                      <a href="{{ route('marca.show',$vestido->marca->id) }}" class="btn btn-simple">{{ $vestido->marca->display_name }}</a>
                      @else
                      No definido
                      @endif
                    </div> --}}
                    {{-- <div class="col text-center">
                      <h6>Acabado</h6>
                      @if ($vestido->clasification_id != null)
                      <a href="{{ route('acabado.show',$vestido->acabado->id) }}" class="btn btn-simple">{{ $vestido->acabado->display_name }}</a>
                      @else
                      No definido
                      @endif
                    </div> --}}
                  </div>

                  {{--<hr>
                   <div class="row">
                    <div class="col text-center">
                      <h6>Precio</h6>
                      ${{ number_format($vestido-> precio,2) }}
                    </div>
                    <div class="col text-center">
                      <h6>Precio Descuento</h6>
                       @if($vestido->precio_descuento != null) ${{ number_format($vestido -> precio_descuento,2) }} @else No Definido @endif
                    </div>
                  </div>
                  <hr> --}}
                </div>
              </div>
            </div>
            <div class="card-footer w-100">
              <div class="row justify-content-between align-items-center d-flex px-2">
                <a class="btn btn-simple mr-2" href="{{ route('article.edit', $vestido-> id) }}"><i class="fas fa-edit"></i>&nbsp;Editar</a>

                <a class="btn btn-simple mr-2" href="@if($vestido->is_rebaja == 1){{ route('front.vestido.outlet', $vestido-> slug) }} @else{{ route('front.vestido', $vestido-> slug) }} @endif"><i class="fas fa-globe"></i>&nbsp;Ver
                  en sitio</a>

                  {{Form::open(['class' => 'm-0 mr-2 d-flex','method'  => 'delete', 'route' => [ 'article.destroy',$vestido -> id ]])}}
                   {{ Form::button('<i class="fas fa-trash"></i> Borrar', ['type'=>'submit','class' => 'btn btn-danger']) }}
                  {{ Form::close() }}
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
    {{-- Fotografías --}}
    <div class="col-md-12 col-lg-8">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 text-center">
              @if ($vestido->pics->count() > 0)
                <div class="row">
                  @foreach ($vestido->pics as $vp)
                    <div class="col-3 p-0">
                      <div class="article_image" style="background-image:url('{{ url($vp->path) }}');">
                      </div>
                    </div>
                  @endforeach
                </div>
              @else
                <div class="row align-items-center">
                    <div class="col text-center">
                      <h6>No hay fotos del producto</h6>
                      <a href="{{ route('article.pictures', $vestido->id) }}" class="btn btn-link">
                        <i class="fas fa-camera-retro"></i>&nbsp;Añadir imágenes</a>
                    </div>
                </div>
              @endif
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row justify-content-end">
            <div class="col-6 text-right">
              <a href="{{ route('article.pictures', $vestido->id) }}" class="btn btn-simple">
                <i class="fas fa-camera-retro"></i>&nbsp;Editar imágenes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Inventario --}}
    {{-- <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-center align-items-start pt-3">
          @if ($vestido->stock->count() > 0)
            <div class="col-10">
              <table class="table">
                <thead>
                  <tr class="text-center">
                    <th> Color </th>
                    <th> Color Hex </th>
                    <th> Talla </th>
                    <th> Cantidad </th>
                    <th> Sucursal </th>
                    <th>Borrar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($vestido->stock as $vs)
                  <tr class="text-center">
                    <td class="text-center">
                      <span>{{$vs -> color}}</span>
                    </td>
                    <td class="text-center">
                      <span>{{$vs -> color_hex}}</span>
                    </td>
                    <td class="text-center">
                      <span>{{$vs -> talla}}</span>
                    </td>
                    <td class="text-center">
                      @if ($vs-> cantidad > 0)
                      <a href="{{route('stock.reduce',$vs->id)}}" class="btn btn-warning btn-icon btn-sm btn-neutral"><i class="fas fa-minus"></i></a>
                      @endif

                      <span>{{ $vs -> cantidad }}</span>

                      <a href="{{route('stock.add',$vs->id)}}" class="btn btn-success btn-icon btn-sm btn-neutral"><i class="fa fa-plus"></i></a>
                    </td>
                    <td>
                      {{ $vs->store->display_name }}
                    </td>
                    <td>
                      <a href="{{route('stock.remove',$vs->id)}}" class="btn btn-danger btn-icon btn-sm btn-neutral"><i class="fa fa-times"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            @else
            <div class="col-md-12">
              <h5 class="text-center">No hay existencias de este <br> producto en inventario</h5>
            </div>
            @endif
          </div>
          <div class="row justify-content-center">
            <div class="col-10">
              {!! Form::open(['route' => ['stock.create', $vestido->id ], 'method' => 'POST']) !!}
              {!! Form::token() !!}
              <div class="form-group row justify-content-center align-items-end">
                <div class="col py-3">
                  {!! Form::label('color', 'Color') !!}
                  {!! Form::text('color',old('color') ,array('class' => 'form-control')) !!}
                  @if ($errors->has('color'))
                  <span class="help-block">
                    <small class="text-danger">{{ $errors->first('color') }}</small>
                  </span>
                  @endif
                </div>
                <div class="col py-3">
                  {!! Form::label('color_hex', 'Color Hex') !!}
                  {!! Form::text('color_hex',old('color_hex') ,array('class' => 'form-control','id' => 'color_hex')) !!}
                  @if ($errors->has('color'))
                  <span class="help-block">
                    <small class="text-danger">{{ $errors->first('color') }}</small>
                  </span>
                  @endif
                </div>
                <div class="col py-3">
                  {!! Form::label('talla', 'Talla') !!}
                  {!! Form::text('talla',old('talla') ,array('class' => 'form-control')) !!}
                  @if ($errors->has('talla'))
                  <span class="help-block">
                    <small class="text-danger">{{ $errors->first('talla') }}</small>
                  </span>
                  @endif
                </div>
                <div class="col py-3">
                {!! Form::label('cantidad', 'Cantidad') !!}
                {!! Form::text('cantidad',old('cantidad') ,array('class' => 'form-control')) !!}
                @if ($errors->has('cantidad'))
                <span class="help-block">
                  <small class="text-danger">{{ $errors->first('cantidad') }}</small>
                </span>
                @endif
              </div>
                <div class="col py-2">
                 <label for="store_id">Sucursal:</label>
                 <select class="custom-select" name="store_id">
                   <option value="0">Seleccionar</option>
                   @foreach ($stores as $s)
                    <option value="{{ $s-> id }}">{{ $s-> display_name }}</option>
                   @endforeach
                 </select>
                 @if ($errors->has('linea_id'))
                 <span class="help-block">
                      <small class="text-danger">{{ $errors->first('linea_id') }}</small>
                  </span>
                 @endif
                </div>
                <div class="col">
                  <button type="submit" class="btn btn-secondary">
                    Añadir Inventario
                  </button>
                </div>
              </div>
              <div class="form-group row justify-content-center align-items-center">

              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div> --}}

</div>
<!-- contenido -->
@include('backend.layouts.footers.footer')
@endsection
@section('page_scripts')
{!!Html::script('js/colorpicker/colorpicker.js')!!}
<script type="text/javascript">
  $(document).ready(function() {
    //').ColorPicker();
    $('#color_hex').ColorPicker({
    	onSubmit: function(hsb, hex, rgb, el) {
    		$(el).val(hex);
    		$(el).ColorPickerHide();
    	},
    	onBeforeShow: function () {
    		$(this).ColorPickerSetColor(this.value);
    	}
    })
    .bind('keyup', function(){
    	$(this).ColorPickerSetColor(this.value);
    });
  });
</script>
@endsection
