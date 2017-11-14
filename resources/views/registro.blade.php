<?php
// session_start();
require_once 'soporte.php';
require_once 'php/clases/Usuario.php';

session_destroy();
if ($auth->estaLogueado()) {
		header("Location:index.php");exit;
	}

$emailDefault = "";
$nameDefault = "";
//cual es esta forma?, una comparación?

if (isset($_SESSION['restoreInputValues'])) {
$nameDefault = $_SESSION['restoreInputValues']['name'];
$emailDefault = $_SESSION['restoreInputValues']['email'] ?? '';
}

if (isset($_SESSION['errores'])) {
	$errores = $_SESSION['errores'];
}

// if (isset($_SESSION["errores"])) {
//    if (basename($_SERVER['PHP_SELF']) != $_SESSION["errores"]) {
//         session_destroy();
//    }
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/css-registr.css">
  <link rel="stylesheet" href="css/navbar.css">



  <title>Registro</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via :// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <?php  include 'php/sistema-nav-login.php'; ?>

    <div class="">
      <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
        <header>
        <legend><h2 style=margin-top:150px>Registro</h2></legend>
        </header>
      </div>
    </div>

<!-- RECUPERACION DE ARRAY DE ERRORES DESDE SESSION -->
<!-- si hay data en array de errores, entonces crear row con impresion de los mensajes dentro del array -->
    <!-- <?php if (!empty($_SESSION['errores'])): ?>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4">
                <div class="alert alert-danger">
                    <?php foreach ($_SESSION['errores'] as $mensajesError): ?>
                        <p><?php echo $mensajesError; ?></p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
      <?php else: ?>
      <?php $name = $email = $password = ""; ?>
    <?php endif ?> -->

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
        <?php else: ?>
        <?php $emailDefault = $nameDefault = "";?>
        <!-- $name = $email = $password = "";?> -->
      <?php endif ?>
<!-- RECUPERACION DE ARRAY DE ERRORES DESDE SESSION -->

    <div class="container-fluid-registro registro-body">

    <form action="php/registro.controller.php" method="POST" class="register-form"  enctype="multipart/form-data">

      <!--CAMPOS PRINCIPALES-->

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only control-label" for="primer-nombre">Nombre</label>
          <!-- <input name="nombre" value="" class="form-control" type="text" id="nombre" placeholder="Nombre"> -->
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
            <input name="name" id="name" value="<?=$nameDefault?>" class="form-control" type="text" placeholder="Nombre">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <span class="glyphicon glyphicon-user form-control-feedback">
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only" for="email">E-mail</label>
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <input name="email" id="email" value="<?=$emailDefault?>" class="form-control" type="email" placeholder="E-mail">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <span class="glyphicon glyphicon-envelope form-control-feedback">
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
          <label class="sr-only" for="password">Password</label>
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <input name="password" value="" class="form-control" type="password" placeholder="Password">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <span class="glyphicon glyphicon-lock form-control-feedback">
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <label class="sr-only" for="cpassword">Confirmar password</label>
          <input id="cpassword" class="form-control" type="password" name="cpassword" placeholder="Confirmar Password">
<!-- DATO RECUPERADO POR SESSION + POST + ERRORES -->
          <span class="glyphicon glyphicon-lock form-control-feedback">
          </span>
        </div>
      </div>




      <div class="row">
        <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 ">
                <label for="avatar">Elige una imagen de perfil</label>
                <input type="file" class="form-control" name="avatar" id="avatar" />
                <span class="help-block"></span>
          </div>
       </div>

      <!-- /CAMPOS PRINCIPALES-->


        <!-- BOTON -->
        <div class="row form-group">
          <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 form-group">
            <button class="btn btn-mg btn-block regbutton" type="submit">Registrate</button>
          </div>
        </div>
        <!-- BOTON -->


    </form>



  </div>

  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
