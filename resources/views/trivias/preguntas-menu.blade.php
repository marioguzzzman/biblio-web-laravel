@extends('master')

@section('title', 'Biblio-web')
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
            <div class="col-md-3">
              <a id="single_image1" href="../trivias/trivias-index/literatura.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/libro.png" alt="literatura" />
                </div>
              </a>

            </div>

            <div class="col-md-3">
              <a id="imagen1" href="../trivias/trivias-index/arte.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/libro.png" alt="literatura" />
                </div>
              </a>
            </div>

            <div class="col-md-3">
              <a id="single_image3" href="../trivias/trivias-index/bcn.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/bcn.png" alt="literatura" />
                </div>
              </a>
            </div>
            <!-- PRIMERA FILA -->
          </div>

          <div class="row">
            <!-- SEGUNDA FILA -->
            <div class="col-md-3">
              <a id="single_image5" href="../trivias/trivias-index/infantil.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/libro.png" alt="literatura" />
                </div>
              </a>
            </div>

            <div class="col-md-3">
              <a id="single_image6" href="../trivias/trivias-index/juvenil.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/juvenil.png" alt="literatura" />
                </div>
              </a>
            </div>

            <div class="col-md-3">
              <a id="single_image7" href="../trivias/trivias-index/musica.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/musica.png" alt="literatura" />
                </div>
              </a>
            </div>
            <!-- SEGUNDA FILA -->
          </div>

          <div class="row">
            <!-- TERCERA FILA -->
            <div class="col-md-3 col-md-offset-3">
              <a id="single_image4" href="../trivias/trivias-index/constitucion.html">
                <div class="efecto-wrapper">
                  <img class="img-responsive" src="img/trivias/constitucion.png" alt="literatura" />
                </div>
              </a>
            </div>
            <!-- TERCERA FILA -->
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
