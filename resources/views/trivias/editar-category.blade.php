@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Editar por categorías')
@section('nav-css','../css/navbar.css')
{{-- @section('page-css','../css/main3.css') --}}
@section('logo', '../img/Bibliomovil_logo_WHT.png')

@section('content')

<div class="container">
	<br><br>
		<h1>Edición por categorías</h1>
		<br>
		<p><strong>Intrucciones:</strong>
			En esta sección es posible: <br>
			1) <strong>Editar</strong> el nombre de las categorías de las trivias.<br>
			2) <strong>Borrar</strong> una categoría completa, junto con todas las preguntas asociadas a ellas.</p>
		<p class="alert alert-danger">Las categorías borradas, no pueden ser recuperadas.</p>

		<table class="table table-striped table-bordered">
			<tbody>
				{{-- @foreach ($todasTrivia as $unaTrivia)<!-- FOREACH PARA OBJETO --> --}}
				@foreach ($categoryAll as $category)<!-- FOREACH PARA OBJETO -->
					<tr>
						{{-- <td>{{$unaTrivia->first()->category->trivias_cat}}</td> --}}
					<td> <a href="/preguntas/showEdit/{{$category->id}}">
					{{$category->trivia_category}}</a></td>
						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							<a href="/preguntas/showEdit/{{$category->id}}" class="btn btn-success">
								{{-- cambiar direccion de editado, que vaya a una nueva vista --}}
								<i class="fa fa-pencil"></i>
							</a> <br><br>
							<form action="/preguntas/deleteCategoria/{{$category->id}}" method="post">
								{{ csrf_field() }}
        				{{ method_field('delete') }}
								 <button class="fa fa-trash btn btn-danger" type="submit"></button>
							{{-- <a href="" class="btn btn-danger"> --}}
								{{-- <i class="fa fa-trash"></i> --}}
							{{-- </a> --}}
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>

</div>
@endsection
