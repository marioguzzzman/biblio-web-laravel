@extends('master')

@section('title', 'Menú Preguntas')
{{-- @section('nav-css','css/navbar.css') --}}
@section('page-css','css/trivias-menu.css')

@section('content')

  <div class="container">
    <!-- CONTAINER PRINCIPAL -->
    <br><br><br><br>


    <div class="row">
      <!-- ROW PRINCIPAL -->
      <header>
        <h1 class="display-1">¿Cuánto sabes sobre...?</h1>
      </header>

      <section class="imagen-izquierda">
        <div class="col-sx-2 col-md-4 col-md-offset-1">
          <!-- IMAGEN SIDE -->
          <img class="img-responsive" src="img/profesor.png" alt="Profesor">
          <!-- IMAGEN SIDE -->
        </div>
      </section>

      <section id=menu-trivias class="menu-trivias">
        <!-- CONTENEDOR DE ICONOS DE TRIVIAS -->
        <div class="col-md-7">
          <!-- CONTENEDOR DE ICONOS DE TRIVIAS -->

          <div class="row">
            <!-- PRIMERA FILA -->
            @foreach ($categoryAll as $category)

          <div class="col-md-3">

            <a id="single_image1" href=""></a>
              <img class="img-responsive" src="img/trivias/libro.png" alt="{{$category->trivia_category}}"/>
                <div class="centered trivia">
                  <h4>
                    <a href="/preguntasMenu/{{$category->id}}">{{$category->trivia_category}}</a>
                  </h4>
                </div>
          </div>



                {{-- <div class="col-md-3">
                  <a id="single_image1" href="">
                      <img class="img-responsive" src="img/trivias/libro.png" alt="literatura"/>
                  </a>
                </div> --}}

            @endforeach

          </div>

          <!-- CONTENEDOR DE ICONOS DE TRIVIAS -->
        </div>
        <!-- CONTENEDOR DE ICONOS DE TRIVIAS -->
      </section>
      <!-- ROW PRINCIPAL -->
    </div>
    <!-- CONTAINER PRINCIPAL -->
  </div>

@endsection
