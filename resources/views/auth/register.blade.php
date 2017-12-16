@extends('layouts.app')

@section('title', 'Registro')
{{-- @section('nav-css','css/navbar.css') --}}
@section('page-css','css/css-registr.css')

@section('content')
  <div class="">
    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
      <header>
        <legend>
          <h2 style=margin-top:150px>Registro</h2>
        </legend>
      </header>
    </div>
  </div>

  <div class="container-fluid-registro registro-body">
    <form class="register-form"  enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}

        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="sr-only control-label" for="name">Nombre</label>
              <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>

                  @if ($errors->has('name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
          </div>
        </div>

        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="sr-only" for="email">E-mail</label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}" required>

                  @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
          </div>
        </div>

        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4  form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="sr-only">Password</label>
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                  @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
          </div>
        </div>

        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4  form-group">
              <label for="password-confirm" class="sr-only">Confirma tu password</label>
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirma tu password" name="password_confirmation" required>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4  form-group{{ $errors->has('provincias') ? ' has-error' : '' }}">

                <select class="selecLugar provincias custom-select">
                <option class="selecLugar" value="">Selecciona tu provincia</option>
                </select>

                  <br>
                <br>
                  <select class="selecLugar ciudades custom-select">
                    <option class="selecLugar" value="">Selecciona tu ciudad:</option>
                  </select>

                  @if ($errors->has('provincias'))
                      <span class="help-block">
                        <strong>{{ $errors->first('provincias') }}</strong>
                      </span>
                  @endif
          </div>
        </div>

        <div class="row form-group">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
            <button type="submit" class="btn btn-mg btn-block regbutton">Registrate</button>
          </div>
        </div>

      </form>
    </div>

{{-- script para buscar por ajaxx provincias y ciudades --}}
  <script type="text/javascript" src="{{ asset('js/provincias.js') }}"></script>

@endsection
