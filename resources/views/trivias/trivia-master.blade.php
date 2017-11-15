@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Arte')
@section('nav-css','../css/navbar.css')
@section('page-css','../css/trivias-main-css.css')

@section('content')

@php
// @include ('../db/trivias-db')
$respuestasPreguntas = [
  'Arte' => [
      'uno' => ['Arte',' Puerto Madryn',' Coghlan', ' La Boca',],
      'dos' => ['Arte',' Javiercito Rodriguez',' Pedrito el Charquito', ' Juanito Laguna'],
      'tres' => ['Arte',' Japón',' Ecuador',' Uruguay',],
      'cuatro' => ['Arte',' Suprematismo',' Romanticismo', ' Surrealismo'],
      'cinco' => ['Arte',' Chile',' Brasil',' Perú',],
      'seis' => ['Arte',' Necochea',' La Quiaca', ' Mar del Plata'],
      'siete' => ['Arte',' Plaza de Mayo',' Plaza de la Constitución', ' Plaza Congreso'],
      'ocho' => ['Arte',' Reloj solar',' Retrato de una divinidad',' Calendario',],
      'nueve' => ['Arte',' Trabajan con colores tierra representando la flora y la fauna',' Son vegetarianos y luchan por el cuidado y respeto hacia el medio ambiente', ' Intervienen el paisaje y mayormente utilizan materiales de la naturaleza'],
      'diez' => ['Arte',' Carnaval',' Navidad', ' Rito de iniciación'],
  ],

  'Literatura' => [
      'uno' => ['Arte',' Chile',' Brasil',' Perú',],
      'dos' => ['Arte',' Chile',' Brasil',' Perú',],
      'tres' => ['Arte',' Chile',' Brasil',' Perú',],
      'cuatro' => ['Arte',' Chile',' Brasil',' Perú',],
      'cinco' => ['Arte',' Chile',' Brasil',' Perú',],
      'seis' => ['Arte',' Chile',' Brasil',' Perú',],
      'siete' => ['Arte',' Chile',' Brasil',' Perú',],
      'ocho' => ['Arte',' Chile',' Brasil',' Perú',],
      'nueve' => ['Arte',' Chile',' Brasil',' Perú',],
      'diez' => ['Arte',' Chile',' Brasil',' Perú',],
  ],

];


$trivias = [
    'nombresTrivias' => [
        'Arte' => [
            'Preguntas' => ['Arte','1. ¿En qué barrio de la Ciudad de Buenos Aires vivió el pintor autodidacta Benito Quinquela Martín?',
						'2. ¿Cuál es el nombre de éste famoso personaje creado por Antonio Berni?','3. ¿En qué país nació Joaquín Torres García el creador de la Escuela del Sur?','4. ¿A qué movimiento pertenece esta pintura realizada en México por la artista española Remedios Varo?', '5. Esta obra de Arte Callejero títulada "Identidad" representa a dos ciudadanos de un país latinoamericano. ¿Cuál es?', '6. ¿En que ciudad esta emplazada la escultura del lobo marino hecha de alfajores de la Artista Marta Minujin?', '7. ¿En que plaza de la ciudad de Buenos Aires se encuentra la copia de "El Pensador" de Rodin?', '8. ¿Qué representa esta piedra correspondiente a la civilización Maya?', '9. ¿Cuáles de estas características corresponden a la búsqueda artística del Land Art (Arte de la tierra)?', '10. ¿Con motivo de qué acontecimiento los hombres Selknam realizaban sus pinturas corporales?',  ],

            'Tips' => ['Arte','Benito Quinquela Martín (Buenos Aires 1890 - 1977), trabajó durante su infancia acarreando bolsas en una carbonearía, experiencia que influenció su visión artística de temática popular.', 'Tip: Antonio Berni (1905 - 1981) creó personajes que representaban a los sectores pobres y olvidados del país.', 'Joaquín Torres García (1874 - 1949) fue un destacado pintor, profesor, escritor, escultor y teórico, creador del "Universalismo constructivo" uno de los principales movimientos artísticos de su país.', 'María de los Remedios Alicia Rodriga Varo y Uranga (1908 – 1963), conocida como Remedios Varo, fue una pintora española naturalizada mexicana que emigró a América como refugiada política durante la Segunda Guerra Mundial.', 'El arte callejero cuenta con una variedad de técnicas: Graffiti, esténcil, pegatinas, mosaicos. Inclusive hay artistas que trabajan sobre los muros utilizando solo agua.', 'Tip: Marta Inés Minujín es una artista conceptual, pop y de acción, nacida en Buenos Aires en 1943, a lo largo de su carrera relizó esculturas con diversos materiales no convencionales como pan dulce, libros, queso y colchones.', 'François-Auguste-René Rodin (París, 12 de noviembre de 1840 - Meudon, 17 de noviembre de 1917) es considerado el primer escultor moderno. Sus ideas y técnicas revolucionaron la escultura dejando atrás siglos de tradición clásica.', 'El pueblo Maya posee una rica historia de 3000 mil años de antigüedad. En épocas precolombinas dominaron extensos territorios en Centroamérica, Mexico y Guatemala fundando importantes ciudades, templos y monumentos.', 'El Land Art es un movimiento originado en Estados Unidos a finales de los años sesenta.', 'El pueblo Selknam vivo en los territorios de Tierra del Fuego, eran nómadas terrestres, cazadores y recolectores. En 1883 comenzó un proceso de colonización y explotación de los territorios que habitaban, proceso un el cual fueron cazados y diezmados por enfermedades hasta su extinción.', ],
            // 'Respuestas1' => ['Arte',
						// ' Puerto Madryn',
						// ' Coghlan',
						// ' La Boca',],
        ],

				'Literatura' => [
            'Preguntas' => ['Literatura','1. ¿En qué barrio de la Ciudad de Buenos Aires vivió el pintor autodidacta Benito Quinquela Martín?',
						'2. ¿Cuál es el nombre de éste famoso personaje creado por Antonio Berni?',],
            'Tips' => ['Arte','Benito Quinquela Martín (Buenos Aires 1890 - 1977), trabajó durante su infancia acarreando bolsas en una carbonearía, experiencia que influenció su visión artística de temática popular.',],
            'Respuestas1' => ['Arte',' Puerto Madryn',' Coghlan','La Boca',],
            'Respuestas2' => [' Javiercito Rodriguez',]
        ]
    ]
];

$nombreTrivia = 'Arte';
$nombreCarpetaImagen = 'arte';
$bulletName = ['cero', 'uno','dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'ocho', 'nueve', 'diez',];
$calificación = ['0','0','10',];
@endphp

  		<div class="container">
  			<!-- CONTAINER PRINCIPAL -->
  			<header>
  				<h1>¿Cuánto sabemos sobre {{$nombreTrivia}}?</h1>
  				<!-- <h1>¿Cuánto sabemos sobre Arte?</h1> -->
  			</header>

  			<form action=" "  class="register-form" id="form1">

  				<!-- FOR QUE REPITE EL FORMULARIO -->

          @for ($i=1; $i < 11; $i++)

  					<!-- <section class="arte"> -->
  				<section class="{{$nombreCarpetaImagen}}">

  					<div class="row">
  						<!-- ROW -->
  						<div class="col-md-10 col-md-offset-1">
  							<!-- COL -->
  							<!-- PREGUNTA  -->
  							<article class="pregunta">

  								<p>
  									<h4>{{$trivias['nombresTrivias'][$nombreTrivia]['Preguntas'][$i]}}</h4></p>
  									<!-- <h4>PREGUNTA 1</p> -->

  								<!-- <img src="img-arte/1.jpg" alt="Mountain View"> -->
  								<img src="/img/trivias/img-{{$nombreCarpetaImagen}}/{{$i}}.jpg" alt="Mountain View">

  								<br>

  								<!-- EMPIEZAN BULLETS -->

  								<div class="col-md-10 col-md-offset-2 bullet">
  									<!-- <input type="radio" class="form-check-input" name="uno?>" value="0"/> -->
  									<input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="0"/>

  									<!-- RESPUESTA1-->
  									{{$respuestasPreguntas[$nombreTrivia][$bulletName[$i]][1]}}
  									<br>


  									<input type="radio" lass="form-check-input" name="{{$bulletName[$i]}}" value="0"/>

  									<!--  RESPUESTA2-->
  									{{$respuestasPreguntas[$nombreTrivia][$bulletName[$i]][2]}}

  									<br>


  									<input type="radio" class="form-check-input" name="{{$bulletName[$i]}}" value="10"/>

  									<!--  RESPUESTA3 -->
  									{{$respuestasPreguntas[$nombreTrivia][$bulletName[$i]][3]}}
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
  												<?php echo $trivias['nombresTrivias'][$nombreTrivia]['Tips'][$i]?>
  												{{-- {{$trivias['nombresTrivias'][$nombreTrivia]['Tips'][$i]}} --}}
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

  <!-- FOR QUE REPITE EL FORMULARIO -->
     @endfor

  			<br><br>
  			<div class="row">
  				<!-- ROW -->
  				<div class="col-md-6 ">
  					<input class="btn btn-primary" type="submit" data-target="" value="   Hacé click para revisar tus respuestas   "></button>

  						<!-- RESULTADOS -->
  			<p>Tu resultado es: <span id="grade">__</span></p>
  			<p id="grade2"></p>

        {{-- {{$errores}} --}}
  						<!-- COL -->
  						</div>
  						<!-- ROW -->
  						</div>
  						</form>


  		</div>



      <script>
  		document.getElementById("form1").onsubmit = function() {
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

  			result = uno + dos + tres + cuatro + cinco + seis + siete + ocho + nueve + diez; //aca vemos el resultado

  			document.getElementById("grade").innerHTML = result;

  			grading = [
  				// {score:0,feedback:"I don't think you studied", image: "0.jpg"},
  				{
  					score: 0,
  					image: "../img-respuestas/0.jpg"
  				},
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
@endsection
