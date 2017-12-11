@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Edicion de Trivias')
@section('nav-css','/css/navbar.css')
{{-- @section('page-css','../css/main_edit.css') --}}
@section('logo', '/img/Bibliomovil_logo_WHT.png')

@section('content')

@foreach ($questions as $question)<!-- FOREACH PARA PREGUNTAS -->

<div class="container">
	<!-- NAVEGACION -->
	<br><br><br>
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

{{-- ---------------------------  TABLA   --------------------------- --}}

		<table class="table table-bordered">
		{{-- <table class="table table-striped table-bordered"> --}}

{{-- ---------------------------  FORMULARIO   --------------------------- --}}
		<form class="col-md-5" action="/categoria/{{$question->id}}" method="post">
			{{ csrf_field() }}
	    {{ method_field('patch') }}
			<tbody>


{{-- ---------------------------  PREGUNTA   --------------------------- --}}

				{{-- FILA PREGUNTA --}}
					<tr>
						{{-- COLUMNA PREGUNTA --}}
						<td> <strong>{{$question->id}}. {{$question->pregunta}}</strong>

							{{-- FORMULARIO PREGUNTA	 --}}
							<div class="form-group">
							  <label for="pregunta"></label>
							  <input type="text" placeholder="Edita aquí la pregunta editada" name="pregunta" class="form-control" id="pregunta" value="{{$question->pregunta}}" class="form-control">
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

{{-- ---------------------------  RESPUESTAS   --------------------------- --}}
						@php
							$i = 0;
						@endphp

						@foreach ($question->questions_answers as $answers)
							@php
							if ( $answers->respuesta_value == 1){
								$styleSucess = "alert alert-success";
								$respuestaLabel = " correcta";
							} else {
								$styleSucess = " ";
								$respuestaLabel = " ";
							}
						@endphp

						<tr>

						@php
							$i++;
						@endphp

					{{-- COLUMNA RESPUESTAS --}}
						<td class ="{{ "valor" }}{{ $answers->respuesta_value}} {{ $styleSucess }}">
							{{ "Respuesta"."$respuestaLabel"." ".$i.":" }} <br> {{ $answers->respuesta }}

							{{-- FORMULARIO RESPUESTAS	 --}}
							<div class="form-group">
								<label for="respuesta{{ $i }}"></label>
								<input type="text" placeholder="Reescribe aquí la respuesta editada" name="respuesta{{ $i }}" class="form-control" id="respuesta{{ $i }}" value="{{ $answers->respuesta }}" class="form-control">
							</div>
							{{-- / FORMULARIO RESPUESTAS	 --}}

							{{-- ERRORES RESPUESTAS --}}
							@if ($errors->has('respuesta{{ $i }}'))
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->get('respuesta{{ $i }}') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							{{-- /ERRORES RESPUESTAS --}}

						{{-- / COLUMNA RESPUESTAS --}}
						</td>

						{{-- COLUMNA ICONOS --}}
						<td style="text-align: right;">
							<a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
							<br><br>
						</td>
						{{-- / COLUMNA ICONOS --}}

					</tr>


				 @endforeach
				 {{-- FIN FOR EACH PARA RESPUESTAS --}}

	{{-- ---------------------------  AYUDA   --------------------------- --}}

					<td>
					{{-- COLUMNA AYUDA --}}
						<p><strong>Ayuda:</strong> <br>{{$question->ayuda}}</p>
						{{-- FORMULARIO AYUDA	 --}}
						<div class="form-group">
							<label for="ayuda"></label>
							<input type="text" placeholder="Edita aquí la sección de ayuda" name="ayuda" class="form-control" id="ayuda" value="{{$question->ayuda}}" class="form-control">
						</div>
						{{-- / FORMULARIO AYUDA	 --}}

						{{-- ERRORES AYUDA --}}
						@if ($errors->has('ayuda'))
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->get('ayuda') as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						{{-- /ERRORES AYUDA --}}

					{{-- / COLUMNA AYUDA --}}
					</td>

					<td style="text-align: right;">
						<a href="" class="btn btn-success">
							<i class="fa fa-pencil"></i>
						</a>
					</td>
				</tr>

			@endforeach <!-- / FOREACH PARA PREGUNTAS -->
			</tbody>

{{-- ---------------------------  /TABLA   --------------------------- --}}
		</table>

{{-- ---------------------------  BOTON SUBMIT   --------------------------- --}}

		<div class="form-group">
			<button type="submit" name="button" class="btn btn-primary">Guardar</button>
		</div>

{{-- ---------------------------  FIN FORMULARIO   --------------------------- --}}
	</form>

</div>

{{-- OCULTAR OBJETOS --}}
{{-- <script type="text/javascript" src="/js/show-hide-objects.js"></script> --}}

@endsection
