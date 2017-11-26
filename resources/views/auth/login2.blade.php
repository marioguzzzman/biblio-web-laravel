@extends('master')
@section('content')

  <div class="container-fluid-login">

    <div class="container login-box">

      <!-- LOGIN BOX -->
      <div class="login-logo">
        <!-- LOGIN LOGO -->

        <div class="row">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
            <img class="" src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Biblioteca del Congreso">
          </div>
        </div>
        <!-- LOGIN HEADER -->
      </div>


        <div class="container login-body">
        <!-- LOGIN BODY -->

        <?php if (isset($errores)): ?>
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                    <div class="alert alert-danger">
                      <?php foreach ($errores as $error) : ?>
                        <li>
                          <?=$error?>
                        </li>
                      <?php endforeach; ?>
                    </div>
                </div>
            </div>
          <?php endif ?>
        <!-- RECUPERACION DE ARRAY DE ERRORES DESDE SESSION -->

        <form action="php/login.controller.php" method="POST" class="register-form">
          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
              <label class="sr-only" for="email">E-mail</label>
              <input name="email" value="" class="form-control" type="email" placeholder="E-mail">
              <!-- <input name="email" value="<?php echo $email ?>" class="form-control" type="email" placeholder="E-mail"> -->
              <span class="glyphicon glyphicon-envelope form-control-feedback">
              </span>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
              <label class="sr-only" for="password">Password</label>
              <input name="password" value="" class="form-control" type="password" placeholder="Password">
              <!-- <input name="password" value="<?php echo $cookie_login['hash'] ?>" class="form-control" type="password" placeholder="Password"> -->
              <span class="glyphicon glyphicon-lock form-control-feedback">
              </span>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
              <h6>  <a href="login.php">¿Olvidaste tu contraseña?</a></h6>
            </div>
          </div>


          <div class="form-check col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
            <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="recordame" id="recordame"> Recuerdame
             </label>
          </div>

          <!-- <form class="form-inline" action="login.controller.php" method="POST"> -->
            <div class="row form-group">
              <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                <button class="btn btn-block btn-mg logbutton" name="login" value="login">Entrar</button>
              </div>
            </div>
          <!-- </form> -->
        </form>
        <!-- LOGIN BODY -->
      </div>
      <!-- LOGIN BOX -->
    </div>

  </div>
@endsection
