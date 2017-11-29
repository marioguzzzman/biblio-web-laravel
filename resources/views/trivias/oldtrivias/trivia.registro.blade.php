@extends('master')
@section('content')

    <div class="">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
        <header>
        <legend><h2 style=margin-top:150px>Registro Trivia</h2></legend>
        </header>
      </div>
    </div>

    <div class="container-fluid-registro registro-body">

    <form action="php/trivia.controller.php" method="POST" class="register-form"  enctype="multipart/form-data">

      <!--CAMPOS PRINCIPALES-->

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only control-label" for="primer-nombre">pregunta</label>
          <!-- <input name="nombre" value="" class="form-control" type="text" id="nombre" placeholder="Nombre"> -->
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
            <input name="pregunta" value="<?php echo $pregunta ?>" class="form-control" type="text" placeholder="pregunta">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only" for="email">ayuda</label>
          <!-- <input name="email" value="" class="form-control" type="email" placeholder="E-mail"> -->
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <input name="ayuda" value="<?php echo $ayuda ?>" class="form-control" type="text" placeholder="ayuda">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          </span>
        </div>
      </div>


      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">

          <select class="" name="categoria_id" id="categoria">
            <option value="1">Arte</option>
            <option value="1">Literatura</option>
            <option value="1">Música</option>
          </select>
      <!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          </span>
        </div>
      </div>

          <!-- /CAMPOS PRINCIPALES-->

          <!-- /CAMPOS PRINCIPALES-->




        <!-- BOTON -->
        <div class="row form-group">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
            <button class="btn btn-mg btn-block regbutton">Registrate</button>
          </div>
        </div>
        <!-- BOTON -->


    </form>



  </div>

@endsection
