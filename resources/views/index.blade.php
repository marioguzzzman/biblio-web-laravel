@extends('master')

{{-- @section('title', 'Biblio-web') --}}
{{-- @section('nav-css','css/navbar.css')
@section('page-css','css/main2.css') --}}

@section('content')


  <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#bs-carousel" data-slide-to="1"></li>
      <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item slides active">
        <div class="slide-1"></div>
        <div class="hero">
              <img src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Bibliomovil" width=350px padding-bottom=50px>
              <h4>Un proyecto de la biblioteca del congreso</h4>
          <a href="#home"><button class="btn btn-hero btn-lg" role="button">Adelante</button></a>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-2"></div>
        <div class="hero">
          <hgroup>
              <img src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Bibliomovil" width=350px padding-bottom=50px z-index=300>
              <h4>Un proyecto de la biblioteca del congreso</h4>
          </hgroup>
          <a href="#home"><button class="btn btn-hero btn-lg" role="button">Adelante</button></a>
        </div>
      </div>
      <div class="item slides">
        <div class="slide-3"></div>
        <div class="hero">
          <hgroup>
              <img src="img/Bibliomovil_logo_COLOR_1000x500.png" alt="Bibliomovil" width=350px padding-bottom=50px>
              <h4>Un proyecto de la biblioteca del congreso</h4>
          </hgroup>
          <a href="#home"><button class="btn btn-hero btn-lg" role="button">Adelante</button></a>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="row linea">
        <div class="col-xs-8 col-xs-offset-2">
          <hr>
        </div>
        </div> -->

  <div class="container"><a name="home"></a>
    <section id="info">
      <!-- INFORMACIÓN GENERAL!-->
      <div class="row info main">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">


          <img class="img-responsive logo" src="img/logo_home_1000x1000.png" alt="Mapa de Argentina">

          <div class="col-xs-12 col-sm-4 col-md-4">
<!-- MAPA / con img-responsive, la imagen ocupa el espacio jsuto del  de la columna-->

            <img class="img-responsive" src="img/mapa_ARG-colors.png" alt="Mapa de Argentina">

<!-- /MAPA-->
          </div>

          <div class="col-xs-12 col-sm-8 col-md-8">
<!-- INFORMACION BIBLIO-->

            <h2>¿Qué es el Bibliomóvil?</h2>

            <article class="que-es">
              <p class="">El <b>Bibliomóvil</b> es un proyecto de la <b>Biblioteca del Congreso de la Nación</b> que tiene como propósito incentivar la lectura, la escritura, la producción artística y el conocimiento a través del territorio argentino con el apoyo
                de un ómnibus de doble altura acondicionado como biblioteca, un grupo de docentes especializados e instrumentos tecnológicos.
                <br>
                <br> El Bibliomóvil cuenta con:
                <br> Una <b>sala de lectura</b> con más de 5,000 libros, una Biblioteca Federal, una de Pueblos Originarios, la de la Memoria y una de Capacitación Docente, entre otras.
                <br> Una <b>sala de escritura</b> e informática equipada con diez computadoras provistas de juegos pedagógicos, cuentos interactivos y propuestas de escritura creativa, así como visitas virtuales al Congreso y muchás otras actividades tecnológicas.
              </p>
            </article>
            <!-- /INFORMACION BIBLIO-->
          </div>

        </div>
      </div>
      <!-- /INFORMACIÓN GENERAL!-->
    </section>
  </div>

  <!-- <div class="row linea">
        <div class="col-xs-8 col-xs-offset-2">
          <hr>
        </div>
        </div> -->

  <div class="container">
    <section id="servicios">
      <!--SERVICIOS!-->
      <div class="row servicios">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2>Servicios</h2>

          <div class="row">
            <!--CONTENIDO SERVICIOS!-->

            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <span class="glyphicon glyphicon-education  glyphicon-large" aria-hidden="true">
              </span>
              <h3>Acercar la Biblioteca al público</h3>
              <p>En el Bibliomóvil de la BCN llevan a cabo actividades para escuelas, bibliotecas, profesorados, centros culturales y público general.
              </p>
            </article>

            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <span class="glyphicon glyphicon-pencil glyphicon-large" aria-hidden="true">
              </span>
              <h3>Promoción de la lectura y la escritura</h3>
              <p>A partir de búsquedas bibliográficas, lectura de poesía, narración y actividades que permiten relacionar la escritura creativa con medios digitales.
              </p>
            </article>

            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <span class="glyphicon glyphicon-film glyphicon-large" aria-hidden="true">
                </span>
              <h3>Actividades culturales y artísticas locales</h3>
              <p>Destinadas a promover la producción de escritores y artistas locales generando situaciones que fortalezcan la cultura provincial dentro en el contexto nacional.
              </p>
            </article>

            <!--/CONTENIDO SERVICIOS!-->
          </div>

        </div>

      </div>
      <!--SERVICIOS!-->
    </section>
  </div>

  <!-- <div class="row linea">
        <div class="col-xs-10 col-xs-offset-1">
          <hr>
        </div>
        </div> -->

        <!-- About Section -->
<section id="historia">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <h2 class="section-heading">Historia del Bibliomóvil</h2>
                  <p class="text-muted">Desde su creación en el año 2002, el Bibliomóvil de la Biblioteca del Congreso de la Nación ha visitado más de 350 pueblos y ciudades, generando así una amplia red federal de intercambio y circulación de contenidos. Hoy, frente a la globalización en la que las fronteras se desdibujan el Bibliomóvil sigue creciendo con la implementación de procesos culturales dinámicos y multiplicadores.</p>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <ul class="timeline">

                      <li class="timeline-inverted">
                          <div class="timeline-image">
                              <img class="img-circle img-responsive" src="img/historia/1.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>2001</h4>
                                  <h4 class="subheading">Compromiso con la comunidad</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">En el año 2001 la Fundación Bill & Melinda Gates distinguió con el Premio "Access to Learning" a la Biblioteca del Congreso. Este premio significó un reconocimiento al compromiso de la institución con la comunidad expresado entre otras cosas, en la posibilidad que se brinda al usuario de acceder a consultas en forma libre y gratuita, las 24 horas del día.</p>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="timeline-image">
                              <img class="img-circle img-responsive" src="img/historia/2.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>2002</h4>
                                  <h4 class="subheading">La cultura al servicio del país</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">En un contexto histórico difícil para el país, el Bibliomóvil inició su tarea acercando a los lugares más alejados y a los sectores más desprotegidos la oportunidad de acceder a la lectura, la tecnología y la información. Para ello, se acondicionaron dos contenedores, cuyo traslado requería una logística compleja, uno como sala de lectura con tres mil títulos y otro como sala de computación con tres computadoras con acceso a internet.</p>
                                  {{-- <p>Se crea el Bibliomóvil (Biblioteca Móvil Multimodal) con el fin educativo de incentivar la lectura y el intercambio cultural entre las distintas provincias del país y el Congreso de la Nación.</p> --}}
                              </div>
                          </div>
                      </li>
                      <li class="timeline-inverted">
                          <div class="timeline-image">
                              <img class="img-circle img-responsive" src="img/historia/3.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>2005</h4>
                                  <h4 class="subheading">Leer y escribir para integrarnos</h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">Basados en la experiencia y con una clara visión de integración social a través del acceso igualitario a la cultura, la información y la difusión de la labor parlamentaria, se inicia una etapa de orientación pedagógica centrando su acción en el ámbito educativo. Se crea entonces el Programa de Promoción de la Lectura y la Escritura “Cultura en Movimiento” con el propósito de reconocer y promover la lectura y la escritura como una necesidad básica para el crecimiento y desarrollo humano.</p>
                              </div>
                          </div>
                      </li>
                      <li class="">
                          <div class="timeline-image">
                              <img class="img-circle img-responsive" src="img/historia/4.jpg" alt="">
                          </div>
                          <div class="timeline-panel">
                              <div class="timeline-heading">
                                  <h4>2007-2017</h4>
                                  <h4 class="subheading"></h4>
                              </div>
                              <div class="timeline-body">
                                  <p class="text-muted">La Biblioteca le pone ruedas a su labor itinerante y adquiere un micro que plantea una dinámica y un ámbito de acción diferentes. La movilidad de la unidad permite ampliar los recorridos y llegar a los lugares más alejados de las fuentes de información. Se realizan encuentros amistosos con los libros, escritura de historias interactivas, actividades plásticas, narración de cuentos, cortometrajes y actividades artísticas. Además se dictan cursos y talleres específicos para docentes referidos a los proyectos vinculados con la escuela.</p>
                              </div>
                          </div>
                      </li>
                      <li class="timeline-inverted">
                      {{-- <li class="timeline-inverted"> --}}
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/historia/5.jpg" alt="">
                            {{-- <h4>Ahora
                                <br>eres parte
                                <br>de esta historia</h4> --}}
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2018</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">En la actualidad el Bibliomóvil ha recorrido más de 350.000 Kilométros, y ha compartido sus libros, historias y actividades con más de 500,000 personas de todo el país.</p>
                            </div>
                        </div>

                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </section>

  {{-- <div class="container">
    <section id="historia">
      <!--HISTORIA!-->
      <div class="col-md-6 col-md-offset-3 historia">
        <h2>Historia</h2>

        <ul class="timeline">

          <li class="timeline">
            <div class="img-responsive">
              <!-- <img src="img/pond.jpg" alt=""> -->
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">1974</h4>
                <!--<p><small class="text-muted"><i class="fa fa-clock-o"></i> 22:29:22</small></p>/!-->
              </div>
              <div class="timeline-body">
                <p>Se inaugura la nueva Sala Pública de Lectura en el edificio de Alsina 1835.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge warning"><i class="fa fa-bullseye"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">2001</h4>
              </div>
              <div class="timeline-body">
                <p>Recibe el premio “Access to Learning” otorgado por la Fundación Bill & Melinda Gates por el amplio horario de atención al público, la gratuidad de sus servicios y el libre acceso a internet.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-badge danger"><i class="fa fa-crosshairs"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">2002</h4>
              </div>
              <div class="timeline-body">
                <p>Se crea el Bibliomóvil (Biblioteca Móvil Multimodal) con el fin educativo de incentivar la lectura y el intercambio cultural entre las distintas provincias del país y el Congreso de la Nación.</p>
              </div>
            </div>
          </li>
          <li class="timeline">
            <div class="timeline-badge success"><i class="fa fa-thumbs-o-down"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">2007</h4>
              </div>
              <div class="timeline-body">
                <p> En la actualidad el Bibliomóvil ha recorrido más de 250.000 Kilmétros, desde Ushuaia hasta la Quiaca. Continuamente se realizan actualizaciones. Se crea la página web Bibliomóvil Interactivo, que permite acercar las actividades de manera
                  simultánea a toda la república Argentina.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!--/HISTORIA!-->
    </section>
  </div> --}}

  <!-- <div class="row linea">
        <div class="col-xs-8 col-xs-offset-2">
          <hr>
        </div>
        </div> -->

  <!-- <div class="container">
    <section id="equipo">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2>Equipo</h2>

        </div>
      </div>
    </section>
  </div> -->

  <!-- <div class="row linea">
        <div class="col-xs-8 col-xs-offset-2">
          <hr>
        </div>
        </div> -->

  <div class="container">
    <section id="faq">
      <!-- PREGUNTAS FRECUENTES!-->
      <div class="row faq">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
          <h2>Preguntas Frecuentes</h2>
          <div class="panel-group" id="accordion">


            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
    ¿Cuántos kilómetros ha recorrido el Bibliomóvil?</a>
  </h4>
              </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body">El Bibliomóvil ha recorrido más de 350,000 km, y visitado a provincias de todo el territorio nacional, desde la Quiaca hasta Tierra del Fuego.</div>
              </div>
            </div>


            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
    ¿Qué otras actividades se han realizado en el Bibliomóvil?</a>
  </h4>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body"><b>Arte Callejero</b>: simultáneamente a las actividades desarrolladas con escuelas o público general, artistas locales realizan murales en vivo en la inmediaciones del Bibliomóvil.<br><br>

                  <b>Café literario</b>: encuentros vespertinos y/o nocturnos con escritores locales a fin de compartir lecturas, reflexiones críticas de la literatura e intercambio de opiniones sobre modalidades de organización editorial.<br><br>

                  <b>Encuentros de narración y poesía</b>: reuniones en el Bibliomóvil para narradores y escritores locales que, a partir del intercambio de experiencias y producción, posibilitan el conocimiento de literaturas regionales ignoradas por
                  el mercado editorial.</div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
  ¿Cuáles son las condiciones para la visita del Bibliomóvil?</a>
  </h4>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body">Las instituciones o autoridades interesadas en solicitar la visita del Bibliomóvil deberán enviar: <br>Nota dirigida al Director Coordinador General de la BCN, Sr. Alejandro Santa.<br> Se deberá consignar el motivo de la solicitud, la/s localidad/es interesadas y el nombre de una persona responsable con quien
                  se establecerá contacto para determinar los distintos aspectos del acuerdo.</div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
Más información</a>
  </h4>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">Dirección Coordinación General <br><br> Adolfo Alsina 1835 piso 4<br> Horario: lunes a viernes de 8 a 18 h<br> Directo: (011) 4378-5513<br> Conmutador: (011) 4378-5600<br> coordinacion@bcn.gob.ar
                  <br>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      <!-- /PREGUNTAS FRECUENTES!-->
    </section>
  </div>

@endsection
