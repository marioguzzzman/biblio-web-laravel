@extends('master')

{{-- pasar nombre por parametro --}}
@section('title', 'Crear Preguntas')
@section('nav-css','../css/navbar.css')
{{-- @section('page-css','../css/main_edit.css') --}}
@section('logo', '../img/Bibliomovil_logo_WHT.png')

@section('content')

	<div class="container">
		<br><br>
			<h1>Crear Trivia</h1>
			<form class="col-md-5" action="/preguntas/crear" method="post">
				{{-- SIEMPRE AGREGAR EL CSFRT_FIELD --}}
				{{ csrf_field() }}

				<div class="form-group">
					<label for="pregunta">Pregunta</label>
					<input type="text" name="pregunta" id="pregunta" value="{{old('pregunta')}}" class="form-control">

										@if ($errors->has('pregunta'))
											<div class="alert alert-danger">
												<ul>
													@foreach ($errors->get('pregunta') as $error)
													    <li>{{ $error }}</li>
													@endforeach
												</ul>
											</div>
										@endif
				</div>

				<div class="form-group">
					<label for="ayuda">Ayuda / Para sabér más / Tip:</label>
					<input type="text" name="ayuda" id="ayuda" value="{{old('ayuda')}}" class="form-control">
				</div>

				<div class="form-group">
					<label for="respuesta1">Respuesta 1</label>
					<input type="text" name="respuesta1" id="respuesta1" value="{{old('respuesta1')}}" class="form-control">

						@if ($errors->has('respuesta1'))
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->get('respuesta1') as $error)
											<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

				</div>
				<div class="form-group">
					<label for="respuesta2">Respuesta 2</label>
					<input type="text" name="respuesta2" id="respuesta2" value="{{old('respuesta2')}}" class="form-control">

					@if ($errors->has('respuesta2'))
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->get('respuesta2') as $error)
										<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				</div>

	      <div class="form-group">
					<label for="respuestaCorrecta">Respuesta correcta</label>
					<input type="text" name="respuestaCorrecta" id="respuestaCorrecta" value="{{old('respuestaCorrecta')}}" class="form-control">

					@if ($errors->has('respuestaCorrecta'))
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->get('respuestaCorrecta') as $error)
										<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				</div>

				<div class="form-group">
				  <label for="cat_id">Selecciona una categoría</label>
				  <select class="form-control" id="cat_id" name="cat_id">
				    <option value="">Selecciona una categoría</option>
						@foreach ($categoryAll as $category)
							<option value="{{$category->id}}">{{$category->trivia_category}}</option>
						 @endforeach
						<option value="7">Nueva categoría</option>
				    </select>

						@if ($errors->has('cat_id'))
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->get('cat_id') as $error)
											<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
				</div>

				{{-- esto esta bien? como hago para que aparezca solo si selecciona como opcion nueva categoria? --}}
				<div class="form-group">
					<label for="trivia_category">Nombre de la nueva Categoría</label>
					<input type="text" name="trivia_category" id="trivia_category" value="{{old('trivia_category')}}" class="form-control">

					@if ($errors->has('trivia_category'))
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->get('trivia_category') as $error)
										<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
				</div>

				<div class="form-group">
					<button type="submit" name="button" class="btn btn-primary">Enviar</button>
				</div>
			</form>
		</div>
@endsection
