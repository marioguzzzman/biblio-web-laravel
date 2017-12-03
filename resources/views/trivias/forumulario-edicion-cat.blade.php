@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Edicion de Trivias')
@section('nav-css','../css/navbar.css')
{{-- @section('page-css','../css/main_edit.css') --}}
@section('logo', '../img/Bibliomovil_logo_WHT.png')

@section('content')

@foreach ($questions as $question)<!-- FOREACH PARA OBJETO -->

<div class="container">
	<!-- NAVEGACION -->
	<a href="/preguntas/showEdit/{{$question->cat_id}}" class="btn btn-default">Volver a Todas las preguntas</a>
	<br>
	<!-- TEXTO -->
		<h1>Estas editando:</h1>
		<h2>Pregunta: <small>{{$question->pregunta}}</small></h2>
		<h2>Categoría: <small>{{$questions->first()->category->trivia_category}}</small> </h2>
		<br>

		<p><strong>Intrucciones:</strong>
		En esta sección es posible: <br>
		1) <strong>Editar</strong> el contenido de preguntas, respuestas y secciones de ayuda.<br>
	<br></p>

			<table class="table table-bordered">
		{{-- <table class="table table-striped table-bordered"> --}}
		<!-- FORMULARIO -->
		<form class="col-md-5" action="/categoria/{{$question->id}}" method="post">
			{{ csrf_field() }}
	    {{ method_field('patch') }}
			<tbody>

				{{-- FILA PREGUNTA --}}
					<tr>
						{{-- COLUMNA PREGUNTA --}}
						<td> <strong>{{$question->id}}. {{$question->pregunta}}</strong>

							{{-- FORMULARIO PREGUNTA	 --}}
							<div class="form-group">
							  <label for="pregunta"></label>
							  <input type="text" placeholder="Reescribe aquí tu pregunta editada" name="pregunta" class="form-control" id="pregunta" value="{{$question->pregunta}}" class="form-control">
							</div>
							{{-- / FORMULARIO PREGUNTA	 --}}

							{{-- ERRORES PREGUNTA --}}
							@if ($errors->has('pregunta'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('pregunta') as $error)
												<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							{{-- /ERRORES PREGUNTA --}}

							{{-- / COLUMNA PREGUNTA --}}
						</td>

						{{-- COLUMNA ICONOS --}}
						<td style="text-align: right;">
							<a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a><br><br>
						</td>
							{{-- / COLUMNA ICONOS --}}
					</tr>
					{{-- /FILA PREGUNTA --}}

					@foreach ($question->questions_answers as $answers)
						<tr>
						@php
						if ( $answers->respuesta_value == 1){
							$styleSucess = "alert alert-success";
							$respuestaLabel = "Respuesta correcta:";
						} else {
							$styleSucess = " ";
							$respuestaLabel = "";
						}
					@endphp

					<tr>
						<td class ="{{ "valor" }}{{ $answers->respuesta_value}} {{ $styleSucess }}"> {{ "$respuestaLabel" }} {{ $answers->respuesta }}

							{{-- FORMULARIO RESPUESTAS	 --}}
							<div class="form-group">
								<label for="pregunta"></label>
								<input type="text" placeholder="Reescribe aquí tu pregunta editada" name="pregunta" class="form-control" id="pregunta" value="{{$question->pregunta}}" class="form-control">
							</div>
							{{-- / FORMULARIO RESPUESTAS	 --}}

							{{-- ERRORES RESPUESTAS --}}
							@if ($errors->has('pregunta'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('pregunta') as $error)
												<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							{{-- /ERRORES RESPUESTAS --}}



						</td>



						<td style="text-align: right;">
							<a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
							<br><br>
						</td>
					</tr>

					{{-- FIN FOR EACH PARA RESPUESTAS --}}
				 @endforeach


					<td> <p> <strong>Ayuda:</strong> <br>{{$question->ayuda}}</p>
					{{-- COLUMNA AYUDA --}}

						{{-- FORMULARIO RESPUESTAS	 --}}
						<div class="form-group">
							<label for="ayuda"></label>
							<input type="text" placeholder="Edita aquí la sección de ayuda" name="ayuda" class="form-control" id="ayuda" value="{{$question->ayuda}}" class="form-control">
						</div>
						{{-- / FORMULARIO RESPUESTAS	 --}}

						{{-- ERRORES RESPUESTAS --}}
						@if ($errors->has('ayuda'))
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->get('ayuda') as $error)
											<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						{{-- /ERRORES RESPUESTAS --}}

						{{-- / COLUMNA AYUDA --}}
						</td>

					<td style="text-align: right;">
						<a href="" class="btn btn-success">
							<i class="fa fa-pencil"></i>
						</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>

	</form>

</div>

<!-- SCRIPTS SUMA-->
{{-- <script type="text/javascript" src="/js/edicion_correcta.js"></script> --}}

@endsection
