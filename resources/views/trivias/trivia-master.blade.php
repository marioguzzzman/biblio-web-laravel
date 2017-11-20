@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Arte')
@section('nav-css','../css/navbar.css')
@section('page-css','../css/trivias-master.css')
@section('logo', '../img/Bibliomovil_logo_WHT.png')

@section('content')

@php
// $nombreTrivia = 'Arte';
// $nombreCarpetaImagen = $_POST['nombreCarpetaImagen'];
$nombreCarpetaImagen = $_GET['nombreCarpetaImagen'];
$bulletName = ['cero', 'uno','dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez',];
$calificación = ['0','0','10',];
@endphp

<!-- CONTAINER PRINCIPAL -->
<header>
  <br><br>
<h1>¿Cuánto sabemos sobre: {{$unaTrivia->first()->category->trivias_cat}}?</h1>
<!-- <h1>¿Cuánto sabemos sobre Arte?</h1> -->
</header>

@php
  $i = 0;
@endphp

@foreach ($unaTrivia as $trivia)<!-- FOREACH PARA OBJETO -->

@php
  $i++;
@endphp

  <div class="container">

    <form action="" class="register-form" id="form1">
    {{-- <form action="" name="triviaForm" class="register-form" id="form1" onsubmit="return results();" method=""> --}}

      <section class="trivias">
        <div class="row">
          <!-- ROW -->
          <div class="col-md-10 col-md-offset-1">
            <!-- COL -->
            <!-- PREGUNTA  -->
            <article class="pregunta">
                <h4>{{$trivia->pregunta}}</h4>
                <!-- <h4>PREGUNTA 1/ IMAGEN</p> -->
                <img src="/img/trivias/img-{{$nombreCarpetaImagen}}/{{$i}}.jpg" alt="img-{{$nombreCarpetaImagen}}/{{$i}}.jpg">
                <br>

                <!-- MUSICA  -->
                @if ($nombreCarpetaImagen == 'musica')
                  <div class="col-md-10 col-md-offset-2 bullet">
                    <audio controls>
                      <source src="/img/trivias/img-musica/{{$i}}.mp3">
                    </audio>
                  </div>
                  <br><br>
                @endif

                          <!-- EMPIEZAN BULLETS -->
                <div class="col-md-10 col-md-offset-2 bullet">
                  <!-- <input type="radio" class="form-check-input" name="uno?>" value="0"/> -->
                  <input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="0" />
                  <!-- RESPUESTA1-->
                  {{$trivia->respuesta1}}
                  <br>
                  <input type="radio" lass="form-check-input" name="{{$bulletName[$i]}}" value="0" />
                  <!--  RESPUESTA2-->
                  {{$trivia->respuesta1}}
                  <br>
                  <input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="10" />
                  <!--  RESPUESTA3 -->
                  {{$trivia->respuestaCorrecta}}
                  <br>
                  <br>
                </div>
                <!-- /TERMINAN BULLETS -->

              <p>
              <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#saber1" aria-expanded="false" aria-controls="collapseExample">Para saber más</button> -->
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#saber{{$i}}" aria-expanded="false" aria-controls="collapseExample">Para saber más</button>
              </p>
              <!-- <div class="collapse" id="saber1"> -->
              <div class="collapse" id="saber{{$i}}">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div class="card card-block saber">
                    <!-- <figcaption> -->
                    <!-- PARA SABER MAS -->
                      {{$trivia->ayuda}}
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
    </form>
  </div>
  <!-- CONTAINER PRINCIPAL -->
@endforeach
<!-- FOREACH PARA OBJETO -->
  <br><br>
  <div class="row">
    <!-- ROW -->
    <div class="col-md4 col-md-offset-3">
      <!-- COL -->
      {{-- <input class="btn btn-lg btn-warning" type="submit" id="submit" data-target="" value="Hacé click para revisar tus respuestas"></button> --}}
      <input class="btn btn-lg btn-warning" type="submit" data-target="" value="Hacé click para revisar tus respuestas"></button>
      <br><br>Tu resultado es: <span id="grade">__</span>
      <!-- RESULTADOS -->
      <p id="grade2"></p>
      {{-- {{$errores}} --}}
      <!-- COL -->
    </div>
    <!-- ROW -->
  </div>
{{-- </form> --}}


@endsection

<script>
  var audio = new Audio("/Sample.wav ");

  function play() {
    var audio = document.getElementById('audio');

    if (audio.paused) {
      audio.play();
      $('#play').removeClass('glyphicon-play-circle')
      $('#play').addClass('glyphicon-pause')
    } else {
      audio.pause();
      audio.currentTime = 0
      $('#play').addClass('glyphicon-play-circle')
      $('#play').removeClass('glyphicon-pause')
    }
  }
</script>

<script>
			document.getElementById("form1").onsubmit = function() {
				uno = parseInt(document.querySelector('input[name = "uno"]:checked').value);
				dos = parseInt(document.querySelector('input[name = "dos"]:checked').value);
				uno = parseInt(document.querySelector('input[name = "uno"]:checked').value);
				dos = parseInt(document.querySelector('input[name = "dos"]:checked').value);
				tres = parseInt(document.querySelector('input[name = "tres"]:checked').value);
				cuatro = parseInt(document.querySelector('input[name = "cuatro"]:checked').value);
				cinco = parseInt(document.querySelector('input[name = "cinco"]:checked').value);
				seis = parseInt(document.querySelector('input[name = "seis"]:checked').value);
				siete = parseInt(document.querySelector('input[name = "siete"]:checked').value);
				ocho = parseInt(document.querySelector('input[name = "ocho"]:checked').value);
				nueve = parseInt(document.querySelector('input[name = "nueve"]:checked').value);
				diez = parseInt(document.querySelector('input[name = "diez"]:checked').value);

				result = uno + dos + tres + cuatro + cinco + seis + siete + ocho + nueve + diez;

				document.getElementById("grade").innerHTML = result;

				grading = [
					{
						score:0,feedback:"I don't think you studied",
            image: "0.jpg"},
					{
						score: 10,
						image: "../img-respuestas/0.jpg"},
					{
						score: 20,
						image: "../img-respuestas/0.jpg"},
					{
						score: 30,
						image: "../img-respuestas/30.jpg"},
					{
						score: 40,
						image: "../img-respuestas/30.jpg"},
					{
						score: 50,
						image: "../img-respuestas/50.jpg"},
					{
						score: 60,
						image: "../img-respuestas/50.jpg"},
					{
						score: 70,
						image: "../img-respuestas/70.jpg"},
					{
						score: 80,
						image: "../img-respuestas/70.jpg"	},
					{
						score: 90,
						image: "../img-respuestas/70.jpg"	},
					{
						score: 100,
						image: "../img-respuestas/100.jpg"}
				];

				for (i = 0; i < grading.length; i++) {
					if (result == grading[i].score) {
						result2 = grading[i].feedback + "<br /><img src='" + grading[i].image + "'width='300'/>";
					}
				}


				document.getElementById("grade2").innerHTML = result2;


				return false; // required to not refresh the page; just leave this here
			} //this ends the submit function
		</script>
