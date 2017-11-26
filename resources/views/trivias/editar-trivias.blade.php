@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Trivias')
@section('nav-css','../css/navbar.css')
@section('page-css','../css/main2.css')
@section('logo', '../img/Bibliomovil_logo_WHT.png')

@section('content')

<div class="container">
	<br><br>
		<h1>Edición de Trivias</h1>

		<table class="table table-striped table-bordered">
			<tbody>
				@foreach ($todasTrivia as $trivia)<!-- FOREACH PARA OBJETO -->
					<tr>
						<td>{{$trivia->category->trivias_cat}}</td>
						{{-- <td>{{ $product->category->name }}</td> --}}
						<td style="text-align: right;">
							<a href="/trivias/{{$trivia->id}}/edit" class="btn btn-success">
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
