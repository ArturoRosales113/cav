@extends('backend.layouts.app')

@section('page_title')
Dashboard
@endsection

@section('dashboard_buttons')
<button class="btn btn-sm btn-outline-secondary">Share</button>
<button class="btn btn-sm btn-outline-secondary">Export</button>
@endsection

@section('content')
<div class="row justify-content-center min-vh-100">
  <div class="col-md-12">
    <div class="row justify-content-center align-items-center py-5">
      <div class="col-lg-11">
        <div class="row">
          <div class="col-lg-8">
            <h2>
                Bienvenido <br>
                <small> {{ Auth::user()->name }}</small>
            </h2>
            <div class="row justify-content-start">
                <a href="{{ route('app.navsettings') }}" class="btn btn-link-secondary">
                  <i class="fas fa-object-group"></i>&nbsp;Menu
                </a>
                <a href="{{ route('app.settings') }}" class="btn btn-link-secondary">
                  <i class="fas fa-cogs"></i>&nbsp;Ajustes
                </a>
              </div>
          </div>
        </div>
        <div class="row justify-content-center">


        </div>
      </div>
    </div>
  </div>
</div>
 @include('backend.layouts.footers.footer')
@endsection
