@extends('master')

@section('title', 'Arte')
@section('nav-css','../css/navbar.css')
@section('page-css','../css/arte.css')

@section('content')

  <div id="main">
		<!-- open main div -->
		<h1>¿Cuánto sabemos sobre Arte?</h1>

		<!-- comentarios/ recordar que el nombre de las variables despues tienen que ser sumados -->

		<form id="form1" action=" ">
			<p>1. ¿En qué barrio de la Ciudad de Buenos Aires vivió el pintor autodidacta Benito Quinquela Martín?</p>

			<img src="/img/trivias/img-arte/1.jpg" alt="Mountain View" style="width:504px;height:328px;">
			<p></p>

			<input type="radio" name="uno" value="0" />Puerto Madryn<br />
			<input type="radio" name="uno" value="0" />Coghlan<br />
			<input type="radio" name="uno" value="10" />La Boca<br />

			<figcaption>Para saber más: Benito Quinquela Martín (Buenos Aires 1890 - 1977), trabajó durante su infancia acarreando bolsas en una carbonearía, experiencia que influenció su visión artística de temática popular. </figcaption>


			<p>2. ¿Cuál es el nombre de éste famoso personaje creado por Antonio Berni?</p>
			<figcaption> Tip: Antonio Berni (1905 - 1981) creó personajes que representaban a los sectores pobres y olvidados del país.</figcaption>

			<img src="../img-arte/2.jpg" alt="Mountain View" style="width:300px;height:600px;">
			<p></p>

			<input type="radio" name="dos" value="0" />Javiercito Rodriguez<br />
			<input type="radio" name="dos" value="10" />Juanito Laguna<br />
			<input type="radio" name="dos" value="0" />Pedrito el Charquito<br />

			<p>3. ¿En qué país nació Joaquín Torres García el creador de la Escuela del Sur?</p>
			<figcaption> Para saber más: Joaquín Torres García (1874 - 1949) fue un destacado pintor, profesor, escritor, escultor y teórico, creador del "Universalismo constructivo" uno de los principales movimientos artísticos de su país.</figcaption>

			<img src="../img-arte/3.jpg" alt="Mountain View" style="width:504px;height:328px;">
			<p></p>

			<input type="radio" name="tres" value="0" />Japón<br />
			<input type="radio" name="tres" value="0" />Ecuador<br />
			<input type="radio" name="tres" value="10" />Uruguay<br />

			<p>4. ¿A qué movimiento pertenece esta pintura realizada en México por la artista española Remedios Varo?</p>

			<img src="../img-arte/4.jpg" alt="Mountain View" style="width:504px;height:400px;">
			<p></p>

			<input type="radio" name="cuatro" value="10" />Surrealismo<br />
			<input type="radio" name="cuatro" value="0" />Suprematismo<br />
			<input type="radio" name="cuatro" value="0" />Romanticismo<br />

			<figcaption> Para saber más: María de los Remedios Alicia Rodriga Varo y Uranga (1908 – 1963), conocida como Remedios Varo, fue una pintora española naturalizada mexicana que emigró a América como refugiada política durante la Segunda Guerra Mundial.</figcaption>


			<p>5. Esta obra de Arte Callejero títulada "Identidad" representa a dos ciudadanos de un país latinoamericano. ¿Cuál es?</p>

			<img src="../img-arte/6.jpg" alt="Mountain View" style="width:504px;height:370px;">
			<p></p>

			<input type="radio" name="cinco" value="0" />Chile<br />
			<input type="radio" name="cinco" value="0" />Brasil<br />
			<input type="radio" name="cinco" value="10" />Perú<br />

			<figcaption> Para saber más: El arte callejero cuenta con una variedad de técnicas: Graffiti, esténcil, pegatinas, mosaicos. Inclusive hay artistas que trabajan sobre los muros utilizando solo agua. </figcaption>

			<p>6. ¿En que ciudad esta emplazada la escultura del lobo marino hecha de alfajores de la Artista Marta Minujin?</p>

			<figcaption> Tip: Marta Inés Minujín es una artista conceptual, pop y de acción, nacida en Buenos Aires en 1943, a lo largo de su carrera relizó esculturas con diversos materiales no convencionales como pan dulce, libros, queso y colchones.</figcaption>


			<img src="../img-arte/7.jpg" alt="Mountain View" style="width:504px;height:328px;">
			<p></p>

			<input type="radio" name="seis" value="0" />Necochea<br />
			<input type="radio" name="seis" value="0" />La Quiaca<br />
			<input type="radio" name="seis" value="10" />Mar del Plata<br />

			<p>7. ¿En que plaza de la ciudad de Buenos Aires se encuentra la copia de "El Pensador" de Rodin?</p>

			<img src="../img-arte/8.jpg" alt="Mountain View" style="width:504px;height:328px;">
			<p></p>

			<input type="radio" name="siete" value="0" />Plaza de Mayo<br />
			<input type="radio" name="siete" value="0" />Plaza de la Constitución<br />
			<input type="radio" name="siete" value="10" />Plaza Congreso<br />

			<figcaption> Para saber más: François-Auguste-René Rodin (París, 12 de noviembre de 1840 - Meudon, 17 de noviembre de 1917) es considerado el primer escultor moderno. Sus ideas y técnicas revolucionaron la escultura dejando atrás siglos de tradición clásica. </figcaption>

			<p>8. ¿Qué representa esta piedra correspondiente a la civilización Maya?</p>

			<img src="../img-arte/9.jpg" alt="Mountain View" style="width:504px;height:360px;">
			<p></p>

			<input type="radio" name="ocho" value="0" /> Reloj solar<br />
			<input type="radio" name="ocho" value="0" />Retrato de una divinidad<br />
			<input type="radio" name="ocho" value="10" />Calendario<br />

			<figcaption> Para saber más: El pueblo Maya posee una rica historia de 3000 mil años de antigüedad. En épocas precolombinas dominaron extensos territorios en Centroamérica, Mexico y Guatemala fundando importantes ciudades, templos y monumentos.</figcaption>

			<p>9. ¿Cuáles de estas características corresponden a la búsqueda artística del <i>Land Art</i> (Arte de la tierra)?</p>

			<img src="../img-arte/5.jpg" alt="Mountain View" style="width:504px;height:328px;">
			<p></p>

			<input type="radio" name="nueve" value="0" />Trabajan con colores tierra representando la flora y la fauna<br />
			<input type="radio" name="nueve" value="10" />Intervienen el paisaje y mayormente utilizan materiales de la naturaleza <br />
			<input type="radio" name="nueve" value="0" />Son vegetarianos y luchan por el cuidado y respeto hacia el medio ambiente<br />

			<figcaption> Para saber más: El Land Art es un movimiento originado en Estados Unidos a finales de los años sesenta.</figcaption>

			<p>10. ¿Con motivo de qué acontecimiento los hombres Selknam realizaban sus pinturas corporales?</p>

			<img src="../img-arte/010.jpg" alt="Mountain View" style="width:504px;height:328px;">
			<p></p>

			<input type="radio" name="diez" value="10" />Rito de iniciación<br />
			<input type="radio" name="diez" value="0" />Carnaval<br />
			<input type="radio" name="diez" value="0" />Navidad<br />

			<figcaption> Para saber más: El pueblo Selknam vivo en los territorios de Tierra del Fuego, eran nómadas terrestres, cazadores y recolectores. En 1883 comenzó un proceso de colonización y explotación de los territorios que habitaban, proceso un el cual fueron cazados
				y diezmados por enfermedades hasta su extinción.</figcaption>

			<p></p>

			<input type="submit" value="Hacé click para revisar tus respuestas">

		</form>

		<!-- RESULTADOS -->
		<p>Tu resultado es: <span id="grade">__</span></p>
		<p id="grade2"></p>

	</div>

@endsection
