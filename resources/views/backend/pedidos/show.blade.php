@extends('backend.layouts.app')
@section('content')
<!-- Navbar -->
@include('backend.layouts.navbars.nav_expand')
<!-- Header -->
<div class="panel-header panel-header-md">
 <div class="header text-center ">
  <h2 class="title">Pedido &nbsp;{{$pedido->openpay_id_pedido}}</h2>
  <a class="text-white" href="{{ route('pedido.index') }}">
   <i class="fas fa-arrow-left"></i>&nbsp;Volver a listado de pedidos</a>
 </div>
</div>
<!-- Header -->
<!-- contenido -->
<div class="content">

 <div class="row justify-content-center">
  <div class="col-md-12">
   <div class="card">
    <div class="card-body">
     <div class="row align-items-center py-3">

      <div class="col-lg-3 text-center">
       <h6 class="title">Status</h6>
        {{$pedido->pedido_status->display_name}}
        <p>{{$pedido->pedido_status->description}}</p>
      </div>

      <div class="col-lg-3 text-center">
       <h6 class="text-center">Registro compra</h6>
       @if ($pedido->ticket != null)
        <h6 class="text-muted">{{$pedido->ticket}}</h6>
       @else
         {!! Form::open(['route' => ['admin.pedido.procesado'], 'method' => 'POST']) !!}
          {!! Form::token() !!}
          <div class="form-group text-center">
            <input type="hidden" name="pedido_id" value="{{$pedido -> id}}">
            <input type="text" class="form-control" name="ticket" aria-describedby="emailHelp" placeholder="Sizes and colors ticket">
            @if ($errors->has('ticket'))
            <span class="help-block">
                 <small class="text-danger">{{ $errors->first('ticket') }}</small>
             </span>
            @endif
            <button type="submit" class="btn btn-default">Marcar como procesado</button>
          </div>

        {!! Form::close() !!}
       @endif
      </div>

      <div class="col-lg-3 text-center">
       <h6 class="">Envío</h6>
       @if ($pedido->envio != null)
        <h6 class="text-muted">{{$pedido->envio}}</h6>
       @else
         {!! Form::open(['route' => ['admin.pedido.enviado'], 'method' => 'POST']) !!}
          {!! Form::token() !!}
          <div class="form-group text-center">
            <input type="hidden" name="pedido_id" value="{{$pedido -> id}}">
            <input type="text" class="form-control" name="guia_envio" aria-describedby="emailHelp" placeholder="Guía de envío">
            @if ($errors->has('guia_envio'))
            <span class="help-block">
                 <small class="text-danger">{{ $errors->first('guia_envio') }}</small>
             </span>
            @endif
            <button type="submit" class="btn btn-default">Marcar como enviado</button>
          </div>

        {!! Form::close() !!}
       @endif
      </div>

      <div class="col-lg-3 text-center">
        @role('admin')
        <a href="#" class="btn btn-danger">Cancelar y hacer devolución</a>
        @endrole
        @role('manager')
        <a href="#" class="btn btn-warning">Solicitar cancelación</a>
        @endrole
      </div>
     </div>
     <hr>
     <div class="row py-3">
         <div class="col-lg-4">
             <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                 <li class="nav-item">
                     <a class="nav-link active rsvp-button-store" data-toggle="tab" href="#buyer" role="tablist">
                         <i class="fa fa-user"></i>
                         Datos del comprador
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link rsvp-button-store" data-toggle="tab" href="#location" role="tablist">
                         <i class="fas fa-map-pin"></i>
                         Datos de envío
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link rsvp-button-store" data-toggle="tab" href="#cart" role="tablist">
                         <i class="fas fa-shopping-cart"></i>
                         Productos comprados
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link rsvp-button-store" data-toggle="tab" href="#payment" role="tablist">
                         <i class="fas fa-credit-card"></i>
                         Información de pago
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link rsvp-button-store" data-toggle="tab" href="#actions" id="btn_actions" role="tablist">
                         <i class="fas fa-history"></i>
                         Historial de acciones
                     </a>
                 </li>
             </ul>
         </div>
         <div class="col-md-8">
             <div class="tab-content" id="tab-content">

                 {{-- Información del usuario --}}
                 <div class="tab-pane active show" id="buyer">
                  <h6>Nombre</h6>
                  <span> {{$pedido -> nombre}}&nbsp;{{$pedido-> appellidos}} </span>
                  <hr>
                  <h6>Telefono</h6>
                  <span>{{ $pedido -> telefono }}</span>
                  <hr>
                  <h6>Correo</h6>
                  <span><a class="btn-link" href="mailto:{{$pedido->email}}">{{$pedido->email}}</a></span>
                 </div>

                 {{-- Informacion de envío --}}
                 <div class="tab-pane" id="location">
                   <h6>Dirección</h6>
                   <span><strong>Calle</strong> {{$pedido -> calle}}</span><br>
                   <hr>
                   <span><strong>Colonia</strong> {{$pedido -> colonia}}</span><br>
                   <hr>
                   <span><strong>Ciudad</strong> {{$pedido -> ciudad}}</span><br>
                   <hr>
                   <span><strong>Estado</strong> {{$pedido -> estado}}</span><br>
                   <hr>
                   <span><strong>CP</strong> {{$pedido -> codigo}}</span><br>
                 </div>

                 {{-- Productos en carrito --}}
                 <div class="tab-pane" id="cart">
                   <div class="row">
                     <div class="col">
                       <h6>Anotaciones del pedido</h6>
                       @if ($pedido->notas != null)
                         <p>{{ $pedido->notas }}</p>
                       @else
                         No hay anotaciones del cliente
                       @endif
                     </div>
                   </div>
                  <div class="list-group">
                    @foreach ($pedido->stock as $p)
                     <li class="list-group-item">
                      <div class="row">
                       <div class="col-2">
                        <img src="{{url($p->article->pics->first()->path)}}" class="img-fluid" alt="">
                       </div>
                        <div class="col-10 text-left">
                         <h5><a href="{{(route('article.show', $p->article->id))}}" class="golde-link">{{$p->article->estilo}}&nbsp;x&nbsp;{{$p->pivot->cantidad}}</a></h5>
                         <h6><a href="{{route('article.show', $p->article->id)}}">${{number_format($p->article->precio,2)}}</a></h6>
                         <p>{{$p->article->description}}</p>
                         <span>Talla:&nbsp;{{$p->talla}}&nbsp; Color:&nbsp;{{$p->color}}</span>
                        </div>
                      </div>
                     </li>
                    @endforeach
                  </div>
                 </div>

                 {{-- Informeción del método de pago --}}
                 <div class="tab-pane" id="payment">
                  <div class="row py-3">
                   <div class="col">
                    <h6>Autorización</h6>
                    <p>{{ $charge->authorization }}</p>
                    <hr>
                    <h6>Id</h6>
                    <p>{{ $charge->id }}</p>
                    <hr>
                    <h6>Fecha</h6>
                    <p>{{ $charge->creation_date }}</p>
                    <hr>
                    <h6>Status</h6>
                    <p>{{ $charge->status }}</p>
                    <hr>
                    <h6>Monto del cargo</h6>
                    <p>${{ number_format($charge->serializableData['amount'],2) }}</p>
                    <hr>
                    <h6>Monto de comisión</h6>
                    <p>${{ number_format($charge->serializableData['fee']->serializableData['amount'],2) }}</p>
                    <hr>
                    <h6>Impuesto</h6>
                    <p>${{ number_format($charge->serializableData['fee']->serializableData['tax'],2) }}</p>
                   </div>
                  </div>
                 </div>

                 {{-- Historial de acciones y mensajes --}}
                 <div class="tab-pane" id="actions">
                    <div class="row py-3">
                      <div class="col">
                        <ul class="list-group">
                          @foreach ($pedido->pedidolog as $pl)
                            @if ($pl->action != null)
                              <li class="list-group-item border-0 my-1 bg-success text-center text-white">
                                <h6 class"text-white">{{ $pl->action }}&nbsp;</h6>
                                <span>Por:&nbsp;{{ $pl->user->name }}</span><br>
                                <small>{{ $pl->created_at->format('d-m-Y  h:m A') }}</small>
                              </li>
                            @else
                              <li class="list-group-item border-0 my-1 @if(Auth::user()->id == $pl->user->id) bg-light text-right @else text-left @endif">
                                <h6 class"text-white">{{ $pl->user->name }}&nbsp;</h6>
                                <span>{{ $pl->message }}</span><br>
                                <small>{{ $pl->created_at->format('d-m-Y  h:m A') }}</small>
                              </li>
                            @endif
                          @endforeach
                        </ul>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col">
                        {!! Form::open(['route' => ['admin.pedido.mensaje'], 'method' => 'POST']) !!}
                        {!! Form::token() !!}
                        {!! Form::hidden('pedido_id',$pedido->id) !!}
                        <div class="form-group row justify-content-center align-items-center">
                          <div class="col-9">
                            {!! Form::label('mensaje', 'Mensaje') !!}
                            {!! Form::text('mensaje',old('mensaje') ,array('class' => 'form-control')) !!}
                            @if ($errors->has('mensaje'))
                            <span class="help-block">
                              <small class="text-danger">{{ $errors->first('mensaje') }}</small>
                            </span>
                            @endif
                          </div>
                          <div class="col">
                            <button type="submit" class="btn btn-success">
                              Enviar mensaje
                            </button>
                          </div>
                        </div>
                        {!! Form::close() !!}
                      </div>
                    </div>
                 </div>

             </div>
         </div>
     </div>

   </div>
  </div>
  </div>
 </div>

</div>
<!-- contenido -->
@include('backend.layouts.footers.footer')
@endsection
@section('page_scripts')
  <!-- alerta -->
  <script type="text/javascript">
  $( document ).ready(function() {
  @if(Session::has('message'))
    $('#btn_actions').trigger('click');
    $("html, body").animate({ scrollTop: $(document).height() }, 1000);
  @endif
  });
  </script>
@endsection
