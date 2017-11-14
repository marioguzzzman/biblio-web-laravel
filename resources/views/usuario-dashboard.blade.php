@extends('master')
@section('content')

    <div class="container usuario">
      <div class="row">
        <br><br><br>
        <div class="col-md-4 col-md-offset-2">

          <!-- como hacemos que si no subio foto se agregue una por defatul? -->
          <img src="uploaded/<?php echo $usuario['avatar'] ?>" alt="Foto de <?php echo $usuario['name'] ?>">

        </div>

        <div class="col-md-4 ">
          <h1>Perfil de usuario</h1>

          <h3>Nombre: <?php echo $name?></h3>
          <h3>Email: <?php echo $email?></h3>
          <br>
          <p>
            A medida que realices actividades, explores la página, respondas las trivias y guardes tus propios cuentos interactivos, tu nivel de usuario se va a incrementar.
            <br><br> Actualmente tienes:
            <br> <br>Lectura:
            <span class="puntos"><?php echo '+ ' . $nivel['lectura'] ?></span>
            <br> Escritura:
            <span class="puntos"><?php echo '+ ' . $nivel['escritura'] ?></span>
            <br> Sabiduría:
            <span class="puntos"><?php echo '+ ' . $nivel['sabiduria'] ?></span>

          </p>
        </div>
      </div>
    </div>

  @endsection
