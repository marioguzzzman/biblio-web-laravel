@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Trivias')
@section('nav-css','../css/navbar.css')
@section('page-css','../css/trivias-master.css')
@section('logo', '../img/Bibliomovil_logo_WHT.png')

@section('content')

@php
// $nombreTrivia = 'Arte';
// $nombreCarpetaImagen = $_POST['nombreCarpetaImagen'];
// $nombreCarpetaImagen = $_GET['nombreCarpetaImagen'];
$bulletName = ['cero', 'uno','dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez',];
$calificación = ['0','0','10',];
@endphp

<!-- CONTAINER PRINCIPAL -->
<header>
  <br><br>
<h1>¿Cuánto sabemos sobre: {{$questions->first()->category->trivia_category}}?</h1>
<!-- <h1>¿Cuánto sabemos sobre Arte?</h1> -->
</header>

@php
  $i = 0;
@endphp

@foreach ($questions as $question)<!-- FOREACH PARA OBJETO -->

@php
  $i++;
@endphp

  <div class="container">

    <form action="" class="register-form" id="formTrivia" >
    {{-- <form action="" name="triviaForm" class="register-form" id="formTrivia" onsubmit="return results();" method=""> --}}

      <section class="trivias">
        <div class="row">
          <!-- ROW -->
          <div class="col-md-10 col-md-offset-1">
            <!-- COL -->
            <!-- PREGUNTA  -->
            <article class="pregunta">
                <h4>{{$question->pregunta}}</h4>

                <!-- <h4>PREGUNTA 1/ IMAGEN</p> -->
                {{-- <img src="/img/trivias/img-{{$nombreCarpetaImagen}}/{{$i}}.jpg" alt="img-{{$nombreCarpetaImagen}}/{{$i}}.jpg">
                <br>

                <!-- MUSICA  -->
                @if ($nombreCarpetaImagen == 'musica')
                  <div class="col-md-10 col-md-offset-2 bullet">
                    <audio controls>
                      <source src="/img/trivias/img-musica/{{$i}}.mp3">
                    </audio>
                  </div>
                  <br><br>
                @endif --}}

                          <!-- EMPIEZAN BULLETS -->

{{-- ESTE SI VA --}}
                {{-- <div class="col-md-10 col-md-offset-2 bullet">
                  <!-- <input type="radio" class="form-check-input" name="uno?>" value="0"/> -->
                  <!-- RESPUESTA1-->
              @foreach ($question->questions_answers as $answers)
                <input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="{{ $answers->respuesta_value }}" />
                <label for="">{{ $answers->respuesta }}</label>  <br />

              @endforeach
                </div> --}}


                    <!-- EMPIEZAN BULLETS -->
                <div class="col-md-10 col-md-offset-2 bullet">
                  <!-- <input type="radio" class="form-check-input" name="uno?>" value="0"/> -->
                  <input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="0" />
                  <!-- RESPUESTA1-->
                  <span class ="{{$bulletName[$i]}}">{{$question->respuesta1}}</span>
                  <br>
                  <input type="radio" lass="form-check-input" name="{{$bulletName[$i]}}" value="0" />
                  <!--  RESPUESTA2-->
                  <span class ="{{$bulletName[$i]}}">{{$question->respuesta2}}</span>
                  <br>
                  <input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="1" />
                  <!--  RESPUESTA3 -->
                  <span class ="{{$bulletName[$i]}}">{{$question->respuestaCorrecta}}</span>
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
                      {{$question->ayuda}}
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
    {{-- </form> --}}
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
      <input class="btn btn-lg btn-warning" type="button" data-target="" id="sumar" value="Hacé click para revisar tus respuestas"></button>
      <br><br>Tu resultado es: <span id="grade">__</span>
      <!-- RESULTADOS -->
      <!-- COL -->
    </div>
    <!-- ROW -->
  </div>
</form>


<script type="text/javascript" src="/js/trivia_sumar.js"></script>


@endsection

<script type="text/javascript">

  element.style.background = "red";

</script>

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
