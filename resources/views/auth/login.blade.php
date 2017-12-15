@extends('layouts.app')

@section('title', 'Login')

{{-- @section('title', 'Biblio-web') --}}
{{-- @section('nav-css','css/navbar.css') --}}
@section('page-css','css/css-registr.css')


@section('content')
  <div class="container-fluid-login">
    <div class="container login-box">

      <!-- LOGIN BOX -->
      <div class="login-logo">
        <!-- LOGIN LOGO -->
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-4 col-lg-4 col-lg-offset-5">
            <img class="" src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Biblioteca del Congreso">
          </div>
        </div>
        <!-- LOGIN HEADER -->
      </div>


      <div class="container login-body">
      <!-- LOGIN BODY -->

        <form class="register-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {{-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> --}}
              <label class="sr-only" for="email">E-mail</label>
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>
          </div>

            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="sr-only" for="password">Password</label>
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                  @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuerdame
                      </label>
                  </div>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu password?</a>
                  <button type="submit" class="btn btn-block btn-mg logbutton">
                    Entrar
                  </button>
              </div>
            </div>
        </form>

      </div><!-- LOGIN BODY -->
    </div>
  </div>

@endsection
