@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Editar Trivias')
@section('nav-css','/css/navbar.css')
{{-- @section('page-css','../css/main_edit.css') --}}
@section('logo', '/img/Bibliomovil_logo_WHT.png')

@section('content')



<div class="container">
	<br><br><br>
	<a href="/categoria/showEdit" class="btn btn-default">Volver a Categorías</a>
	<br><br>

	<a href="/preguntas/crear" class="btn btn-default">Crear pregunta</a>
	<br>
		<h1>Estas editando la categoría: {{$questions->first()->category->trivia_category}}</h1>

	<br>
		<p><strong>Intrucciones:</strong>
		En esta sección es posible: <br>
		1) <strong>Editar</strong> el contenido de preguntas, respuestas y secciones de ayuda.<br>
		2) <strong>Borrar</strong> preguntas y toda la información asociada a ella.</p>
	<p class="alert alert-danger">Las <strong>preguntas</strong> borradas, no pueden ser recuperadas.</p>
		<table class="table table-bordered">
		{{-- <table class="table table-striped table-bordered"> --}}
			<tbody>
				@foreach ($questions as $question)<!-- FOREACH PARA OBJETO -->
					<tr>

						<td> <strong>{{$question->id}}. {{$question->pregunta}}</strong>  </td>



						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							<a href="/categoria/editarCategoria/{{ $question->id }}" class="btn btn-success">
							{{-- <a href="/editar-trivia/{{$trivia->id}}" class="btn btn-success"> --}}
								<i class="fa fa-pencil"></i>
							</a><br><br>
							<form action="/preguntas/deleteTrivia/{{$question->id}}"  method="post" class="deleteElement">
								{{ csrf_field() }}
								{{ method_field('delete') }}
								 <button class="fa fa-trash btn btn-danger"  type="submit"></button>


							{{-- <a href="" class="btn btn-danger"> --}}
								{{-- <i class="fa fa-trash"></i> --}}
							{{-- </a> --}}
							</form>
						 </td>
					</tr>

					{{-- class="success"
					{{ $answers->respuesta_value}} --}}

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
						<td class ="{{ "valor" }}{{ $answers->respuesta_value}} {{ $styleSucess }}"> {{ "$respuestaLabel" }} {{ $answers->respuesta }}</td>
						{{-- <td>{{ $product->category->name }}</td> --}}
						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							{{-- <a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>  --}}
							<br><br>
							{{-- <a href="" class="btn btn-danger">
								<i class="fa fa-trash"></i>
							</a> --}}
						</td>
					</tr>

				 @endforeach

					{{-- <tr>
						<td>Respuesta 2: {{$question->respuesta2}}</td>
						<td style="text-align: right;">
							<a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
					</tr>

					<tr>
						<td class = "success"> Respuesta Correcta: {{$question->respuestaCorrecta}} </td>
						<td style="text-align: right;">
							<a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
					</tr> --}}

					<td> <p> <strong>Ayuda:</strong> <br>{{$question->ayuda}}</p> </td>
					<td style="text-align: right;">
						{{-- <a href="" class="btn btn-success">
							<i class="fa fa-pencil"></i>
						</a> --}}
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>

</div>

	<!-- SCRIPTS BORRAR-->
	<script type="text/javascript" src="/js/edicion_correcta.js"></script>

	@endsection
