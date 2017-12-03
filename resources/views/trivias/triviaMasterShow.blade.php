

  @extends('master') {{-- pasar nombre por parametro --}}
  @section('title', 'Trivias')
  @section('nav-css','../css/navbar.css')
  @section('page-css','../css/trivias-master.css')
  @section('logo', '../img/Bibliomovil_logo_WHT.png')
  @section('content')

    @php
    // $nombreTrivia = 'Arte'; // $nombreCarpetaImagen = $_POST['nombreCarpetaImagen']; // $nombreCarpetaImagen = $_GET['nombreCarpetaImagen'];
      $bulletName = ['cero', 'uno','dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez',];
      // $calificación = ['0','0','10',];
    @endphp

    <!-- CONTAINER PRINCIPAL -->
    <header>
      <br><br>
      <h1>¿Cuánto sabemos sobre: {{$questions->first()->category->trivia_category}}?</h1>
    </header>

    @php
      $i = 0;
    @endphp

    @foreach ($questions as $question)
      <!-- FOREACH PARA OBJETO -->

      @php
        $i++;
      @endphp

      <div class="container">

        <form action="" class="register-form" id="formTrivia">

            <section class="trivias">
              <div class="row">
                <div class="col-md-10 col-md-offset-1">

                  <!-- PREGUNTA  -->
                  <article class="pregunta">
                    <h4 class="{{$bulletName[$i]}}">{{$question->pregunta}}</h4>

                    <img src="/img/trivias/img-{{$questions->first()->category->trivia_category}}/{{$question->img}}.jpg" alt="img-{{$questions->first()->category->trivia_category}}/{{$question->img}}.jpg">
                    <br>

                    <!-- MUSICA  -->
                    {{-- @if ( {{$questions->first()->category->trivia_category}} === 'Música')
                      <div class="col-md-10 col-md-offset-2 bullet">
                        <audio controls>
                          <source src="/img/trivias/img-musica/{{$question->img}}.mp3">
                        </audio>
                      </div>
                      <br><br>
                    @endif --}}

                    <!-- DISPLAY DE ERRORES -->
                    <div style="display:none" class="{{$bulletName[$i]."VerError"}} col-md-10 col-md-offset-1 verError">
                        <span class="alert alert-danger">{{"Elige otra respuesta"}}</span>
                        <br><br>
                    </div>
                    <!-- FIN DISPLAY DE ERRORES -->

                    <!-- EMPIEZAN RESPUESTAS BULLETS CON MODELOS DE LARAVEL -->
                    <div class="col-md-10 col-md-offset-2 bullet">
                      <!-- <input type="radio" class="form-check-input" name="uno?>" value="0"/> -->

                      @foreach ($question->questions_answers as $answers)
                        <input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="{{ $answers->respuesta_value }}"/>
                        <label for="">{{ $answers->respuesta }}</label>
                          <br/>
                      @endforeach
                    </div>


                    <!-- EMPIEZAN BULLETS  DESDE DB_1-->
                    {{--
                    <div class="col-md-10 col-md-offset-2 bullet">
                      <!-- <input type="radio" class="form-check-input" name="uno?>" value="0"/> -->
                      <input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="0" />
                      <!-- RESPUESTA1-->
                      <span class="{{$bulletName[$i]}}">{{$question->respuesta1}}</span>
                      <br>
                      <input type="radio" lass="form-check-input" name="{{$bulletName[$i]}}" value="0" />
                      <!--  RESPUESTA2-->
                      <span class="{{$bulletName[$i]}}">{{$question->respuesta2}}</span>
                      <br>
                      <input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="1" />
                      <!--  RESPUESTA3 -->
                      <span class="{{$bulletName[$i]}}">{{$question->respuestaCorrecta}}</span>
                      <br>
                      <br>
                    </div> --}}

                    <!-- /TERMINAN BULLETS -->


                    <!-- PARA SABER MAS -->
                    <p>
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
                  <!-- /FIN PREGUNTA  -->

                  <!-- COL -->
                </div>
                <!-- ROW -->
              </div>
            </section> <!-- SECCION TRIVIAS -->
      </div>
      <!-- CONTAINER PRINCIPAL -->
    @endforeach
    <!-- FOREACH PARA OBJETO -->

    <br>
    <!-- RESULTADOS -->
      <div class="row">
        <!-- ROW -->
        <div class="col-md4 col-md-offset-3">
          <!-- COL -->
          <input class="btn btn-lg btn-warning" type="button" data-target="" id="sumar" value="Hacé click para revisar tus respuestas">
          <h4 class="resultado">Tu resultado es: <span id="grade">__</span></h4>
          <!-- COL -->
        </div>
        <!-- ROW -->
      </div>


    </form>    <!-- FIN FORMULARIO -->


    <!-- SCRIPTS SUMA-->
    <script type="text/javascript" src="/js/trivia_sumar.js"></script>

    <!-- SCRIPTS MUSICA-->
    <script type="text/javascript" src="/js/trivia_musica.js"></script>

{{-- DESIGN VALIDATOR http://khan.github.io/tota11y/ --}}
    {{-- <script src="tota11y.min.js"></script> --}}


  @endsection
