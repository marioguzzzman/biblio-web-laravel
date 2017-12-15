<nav class="navbar navbar-custom">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
          <span class="sr-only">Menú</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="#">
        <img alt="Bibliomóvil" src="@yield('logo', 'img/Bibliomovil_logo_WHT.png')"></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-1">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="/">Inicio</a></li>

        <li><a href="/preguntasMenu">Trivias</a></li>

        <li class="dropdown" id="escritura">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Escritura Creativa <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!-- <li><a href="castillo.php">Historias de terror</a></li>
            <li><a href="#">La piedra en el estanque</a></li>
            <li><a href="#">PILO</a></li>
            <li role="separator" class="divider"></li>

            <li><a href="#">Cuentos Interactivos</a></li> -->
            <li><a href="http://www.philome.la/marioguzzman/infinitud-discreta/play">Infinitud Discreta</a></li>
            <li><a href="http://www.philome.la/marioguzzman/tringulo-de-las-bermudas/play">El triángulo de las Bermudas</a></li>

          </ul>
        </li>

        {{-- <li class="dropdown" id="infantil">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Infantil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="processing_web/Actividad%20texto%20oculto%201/index.html">
              Palabras escondidas</a></li>
            <!-- <li><a href="#">Hombre canrejo</a></li>
            <li><a href="#">León acalorado</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Plumo</a></li>
            <li><a href="#">Animal Planet</a></li> -->
          </ul>
        </li> --}}

        <li class="dropdown" id="acercade">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acerca de <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#home.php">¿Qué es el Bibliomóvil?</a></li>
            <li><a href="#servicios">Serivcios</a></li>
            <li><a href="#historia">Historia</a></li>
            {{-- <li><a href="#equipo">Equipo Bibliomóvil</a></li> --}}
            <li><a href="#faq">Preguntas Frecuentes</a></li>

          </ul>
        </li>

        @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}">Usuario</a></li>
                    <li><a href="{{ route('logout') }}">Cerrar Sesión</a></li>
                 @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Registro</a></li>
                @endauth
        @endif

        {{-- <li><a href="registro">Registro</a></li>
        <li><a href="login">Login</a></li> --}}


      </ul>
    </div>
    <!-- /.collapse -->
    <!-- /.container-fluid -->
  </nav>
