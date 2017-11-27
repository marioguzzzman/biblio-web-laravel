@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Trivias')
@section('nav-css','../css/navbar.css')
{{-- @section('page-css','../css/main3.css') --}}
@section('logo', '../img/Bibliomovil_logo_WHT.png')

@section('content')

<div class="container">
	<br><br>
		<h1>Edición por categorías</h1>

		<table class="table table-striped table-bordered">
			<tbody>
				{{-- @foreach ($todasTrivia as $unaTrivia)<!-- FOREACH PARA OBJETO --> --}}
				@foreach ($todasCategory as $categoria)<!-- FOREACH PARA OBJETO -->
					<tr>
						{{-- <td>{{$unaTrivia->first()->category->trivias_cat}}</td> --}}
						<td>{{$categoria->trivias_cat}}</td>
						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							<a href="/editar-trivias/{{$categoria->id}}" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
							<a href="" class="btn btn-danger">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>

		</table>

</div>
@endsection
