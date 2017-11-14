<?php
session_start();

require '../db/trivias-db.php';

// que puedo hacer, un controlador, que de un valor a una variable $numeroNombreTrivia, esa variable selecciona del array multidimensional
//
$nombreTrivia = 'Arte';
$nombreCarpetaImagen = 'arte';
$bulletName = ['cero', 'uno','dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez',];
$calificación = ['0','0','10',];



//***** ESQUEMA  $triviasTodas['nombresTrivias'][$nombreTrivia]['categoria, ya sea pregunta, tip o respuesta'][numero dentro del array de categoria];

// $trivias['nombresTrivias'][$nombreTrivia]['Preguntas'][0];
// echo $trivias['nombresTrivias']['Arte']['Respuestas1'][1];

?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $nombreTrivia?></title>
		<!-- <title>ARTE</title> -->

		<link rel="stylesheet" href="trivias-main-css.css">


		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>

	<body>

		<!-- <?php  include 'php/sistema-nav-login.php'; ?> -->

		<div class="container">
			<!-- CONTAINER PRINCIPAL -->
			<header>
				<h1>¿Cuánto sabemos sobre <?php echo $trivias['nombresTrivias'][$nombreTrivia]['Preguntas'][0];?>?</h1>
				<!-- <h1>¿Cuánto sabemos sobre Arte?</h1> -->
			</header>

			<form action=" "  class="register-form" id="form1">

				<!-- FOR QUE REPITE TODO EL FORMULARIO -->
				<?php for ($i=1; $i < 3; $i++):?>

					<!-- <section class="arte"> -->
				<section class="<?php echo $nombreCarpetaImagen ?>">

					<div class="row">
						<!-- ROW -->
						<div class="col-md-10 col-md-offset-1">
							<!-- COL -->
							<!-- PREGUNTA  -->
							<article class="pregunta">

								<p>
									<h4><?php echo $trivias['nombresTrivias'][$nombreTrivia]['Preguntas'][$i];?></h4></p>
									<!-- <h4>PREGUNTA 1</p> -->

								<!-- <img src="img-arte/1.jpg" alt="Mountain View"> -->
								<img src="img-<?php echo $nombreCarpetaImagen ?>/<?php echo $i; ?>.jpg" alt="Mountain View">

								<br>

								<!-- EMPIEZAN BULLETS -->

								<div class="col-md-10 col-md-offset-2 bullet">
									<!-- <input type="radio" class="form-check-input" name="uno?>" value="0"/> -->
									<input type="radio" class="form-check-input" name="<?php echo $bulletName[$i]; ?>" value="0"/>

									<!-- <?php RESPUESTA1;?> -->
									<?php echo $respuestasPreguntas[$nombreTrivia][$bulletName[$i]][1];?>
									<br>


									<input type="radio" lass="form-check-input" name="<?php echo $bulletName[$i]; ?>" value="0"/>

									<!-- <?php RESPUESTA2;?> -->
									<?php echo $respuestasPreguntas[$nombreTrivia][$bulletName[$i]][2];?>

									<br>


									<input type="radio" class="form-check-input" name="<?php echo $bulletName[$i]; ?>" value="10"/>

									<!-- <?php RESPUESTA3;?> -->
									<?php echo $respuestasPreguntas[$nombreTrivia][$bulletName[$i]][3];?>
									<br>

									<br>
								</div>

								<!-- /TERMINAN BULLETS -->

								<p>
									<!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#saber1" aria-expanded="false" aria-controls="collapseExample">Para saber más</button> -->
									<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#saber<?php echo $i;?>" aria-expanded="false" aria-controls="collapseExample">Para saber más</button>
								</p>
								<!-- <div class="collapse" id="saber1"> -->
								<div class="collapse" id="saber<?php echo $i;?>">
									<div class="row">
										<div class="col-md-10 col-md-offset-1">

											<div class="card card-block saber">
												<!-- <figcaption> -->
												<!-- PARA SABER MAS -->
												<?php echo $trivias['nombresTrivias'][$nombreTrivia]['Tips'][$i];?>
												<!-- </figcaption> -->
												<br>
											</div>
										</div>
									</div>
								</div>
							</article>
							<!-- /PREGUNTA  -->

			<!-- COL -->
			</div>
			<!-- ROW -->
			</div>


			</section>
			<!-- CONTAINER PRINCIPAL -->

<!-- FOR QUE REPITE TODO EL FORMULARIO -->
			<?php endfor; ?>

			<br><br>
			<div class="row">
				<!-- ROW -->
				<div class="col-md-6 ">
					<input class="btn btn-primary" type="submit" data-target="" value="   Hacé click para revisar tus respuestas   "></button>

						<!-- RESULTADOS -->
			<p>Tu resultado es: <span id="grade">__</span></p>
			<p id="grade2"></p>

<?php echo $errores; ?>
						<!-- COL -->
						</div>
						<!-- ROW -->
						</div>
						</form>


		</div>



		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<script>
			document.getElementById("form1").onsubmit = function() {
				uno = parseInt(document.querySelector('input[name = "uno"]:checked').value);
				dos = parseInt(document.querySelector('input[name = "dos"]:checked').value);

			// document.getElementById("form1").onsubmit = function() {
			// 	uno = parseInt(document.querySelector('input[name = "uno"]:checked').value);
			// 	dos = parseInt(document.querySelector('input[name = "dos"]:checked').value);
			// 	tres = parseInt(document.querySelector('input[name = "tres"]:checked').value);
			// 	cuatro = parseInt(document.querySelector('input[name = "cuatro"]:checked').value);
			// 	cinco = parseInt(document.querySelector('input[name = "cinco"]:checked').value);
			// 	seis = parseInt(document.querySelector('input[name = "seis"]:checked').value);
			// 	siete = parseInt(document.querySelector('input[name = "siete"]:checked').value);
			// 	ocho = parseInt(document.querySelector('input[name = "ocho"]:checked').value);
			// 	nueve = parseInt(document.querySelector('input[name = "nueve"]:checked').value);
			// 	diez = parseInt(document.querySelector('input[name = "diez"]:checked').value);

errores = ['un problema'];
//
// result =
// if (uno = 0) {
// 	<?php echo 'hay un problema con la oregunta 1'; ?>
// } else {
// 	uno = 10;
// } +
// dos;
// tres

				result =
				uno +
				dos;
				// tres +
				// cuatro +
				// cinco +
				// seis +
				// siete +
				// ocho +
				// nueve +
				// diez;

				// result =  //aca vemos el resultado
				// uno +
				// dos +
				// tres +
				// cuatro +
				// cinco +
				// seis +
				// siete +
				// ocho +
				// nueve +
				// diez;

				document.getElementById("grade").innerHTML = result;


				grading = [

					{
						score:0,feedback:"I don't think you studied", image: "0.jpg"},
					// {
					// 	score: 0,
					// 	image: "../img-respuestas/0.jpg"
					// },
					{
						score: 10,
						image: "../img-respuestas/0.jpg"
					},
					{
						score: 20,
						image: "../img-respuestas/0.jpg"
					},

					{
						score: 30,
						image: "../img-respuestas/30.jpg"
					},
					{
						score: 40,
						image: "../img-respuestas/30.jpg"
					},

					{
						score: 50,
						image: "../img-respuestas/50.jpg"
					},
					{
						score: 60,
						image: "../img-respuestas/50.jpg"
					},

					{
						score: 70,
						image: "../img-respuestas/70.jpg"
					},
					{
						score: 80,
						image: "../img-respuestas/70.jpg"
					},
					{
						score: 90,
						image: "../img-respuestas/70.jpg"
					},


					{
						score: 100,
						image: "../img-respuestas/100.jpg"
					}
				];

				for (i = 0; i < grading.length; i++) {
					if (result == grading[i].score) {
						result2 = grading[i].feedback + "<br /><img src='" + grading[i].image + "' width='300'  />";
					}
				}


				document.getElementById("grade2").innerHTML = result2;


				return false; // required to not refresh the page; just leave this here
			} //this ends the submit function
		</script>


	</body>
		</html>
		<?php exit; ?>
