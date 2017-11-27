@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Trivias')
@section('nav-css','../css/navbar.css')
{{-- @section('page-css','../css/main_edit.css') --}}
@section('logo', '../img/Bibliomovil_logo_WHT.png')

@section('content')

<div class="container">
	<br><br>
		<h1>Edición de Trivia: {{$unaTrivia->first()->category->trivias_cat}}</h1>
	<br>
		<table class="table table-striped table-bordered">
			<tbody>
				@foreach ($unaTrivia as $trivia)<!-- FOREACH PARA OBJETO -->
					<tr>
						<td> <strong>{{$trivia->pregunta}}</strong>  </td>
						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							<a href="" class="btn btn-success">
							{{-- <a href="/editar-trivia/{{$trivia->id}}" class="btn btn-success"> --}}
								<i class="fa fa-pencil"></i>
							</a>
							{{-- <a href="" class="btn btn-danger">
								<i class="fa fa-trash"></i>
							</a> --}}
						</td>
					</tr>

					<tr>
						<td>Respuesta 1: {{$trivia->respuesta1}}</td>
						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							<a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
					</tr>

					<tr>
						<td>Respuesta 2: {{$trivia->respuesta2}}</td>
						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							<a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
					</tr>

					<tr>
						<td class = "success"> Respuesta Correcta: {{$trivia->respuestaCorrecta}} </td>
						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							<a href="" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
					</tr>

					<td> <p>{{$trivia->ayuda}}</p> </td>
					{{-- <td>{{ $product->category->name }}</td> --}}
					<td style="text-align: right;">
						<a href="" class="btn btn-success">
							<i class="fa fa-pencil"></i>
						</a>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>

</div>
@endsection
