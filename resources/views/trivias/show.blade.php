{{-- @php
  dd($unaTrivia);
@endphp --}}

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {{-- <title>{{$trivia_category_id}}</title> --}}
        {{-- <title>{{$product->pregunta}}</title> --}}
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>

      @foreach ($unaTrivia as $unaTrivia)
        <h1>{{$unaTrivia->trivia_category_id}}</h1>
        <h2>{{$unaTrivia->pregunta}}</h2>
        <ul>
          <div class="container">
            <div class="row">
                <h3>{{$unaTrivia->respuesta1}}</h3>
                <h3>{{$unaTrivia->respuesta2}}</h3>
                <h3>{{$unaTrivia->respuestaCorrecta}}</h3>
            </div>
          </div>
        </ul>
        <p>{{$unaTrivia->ayuda}}</p>
      @endforeach
    </body>
</html>
