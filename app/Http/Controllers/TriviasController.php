<?php

namespace App\Http\Controllers;

use App\Trivia;
use App\Category;
use Illuminate\Http\Request;

class TriviasController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = \App\Trivias::all();
        //
        // $variables = [
        // 	"products" => $products,
        // ];
        //
        //  return view('products.index', $variables);
        return view('trivias.preguntas-menu');
    }

    public function showUnaTrivia($trivia_category_id)
    {
        // Este foreach nos muestra el unatrivia, de ahí podemos sacar los datos que querramos. En este caso $unaTrivia es una collection (lo cual es un array potenciado, de la mano de eloquent) y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.
        //
        // $unaTrivia = Trivia::all()
        //   ->where('trivia_category_id', $trivia_category_id);
        //
        // return view('trivias.trivia-master', ['unaTrivia' => $unaTrivia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = \App\Category::all();
        // $properties = \App\Property::all();
        //
        // $variables = [
        //   "categories" => $categories,
        //   "properties" => $properties,
        // ];

        return view('trivias.crear-trivias');
    }

    /**
     * Store a newly created resource in storage.
     * Nos va a permitir validar y guardar los datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
          "pregunta" => "required",
          "respuesta1" => "required",
          "respuesta2" => "required",
          "respuestaCorrecta" => "required",
          "trivia_category_id" => "required",
          // "category_id" => "required|numeric|between:1,3"
        ];

        $messages = [
          "required" => "El :attribute es requerido!",
          "numeric" => "El :attribute tiene que ser un número",
          // "between" => "El :attribute tiene que estar entre :min y :max."
        ];

        $request->validate($rules, $messages);

        $trivia = Trivia::create([
          'pregunta' => $request->input('pregunta'),
          'ayuda' => $request->input('ayuda'),
          'respuesta1' => $request->input('respuesta1'),
          'respuesta2' => $request->input('respuesta2'),
          'respuestaCorrecta' => $request->input('respuestaCorrecta'),
        ]);

        // $category = Category::find($request->input('trivia_category_id'));

        $category = Category::create([
          'trivias_cat' => $request->input('trivias_cat'),
        ]);

        $trivia->category()->associate($category);
        $trivia->save();

        return redirect('/editar-categoria');
    }

    /**
     * Este foreach nos muestra el unatrivia, de ahí podemos sacar los datos que querramos. En este caso $unaTrivia es una collection (lo cual es un array potenciado, de la mano de eloquent) y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($trivia_category_id)
    {
        $unaTrivia = Trivia::where('trivia_category_id', $trivia_category_id)->get();
        // $unaTrivia = Trivia::where('trivia_category_id', $trivia_category_id)->inRandomOrder()->take(10)->get(); //para que funcionen al azar las preguntas

        $variables = [
              "unaTrivia" => $unaTrivia,
              "category" => $unaTrivia->category,//esto dice nico que no es necesario
          ];
        return view('trivias.trivia-master', $variables);

        //ejemplo para usar en vista
            // @foreach ($unaTrivia as $unaTrivia)
            //   <h1>{{$unaTrivia->trivia_category_id}}</h1>
            //   <h2>{{$unaTrivia->pregunta}}</h2>
            //   <ul>
            //     <div class="container">
            //       <div class="row">
            //           <h3>{{$unaTrivia->respuesta1}}</h3>
            //           <h3>{{$unaTrivia->respuesta2}}</h3>
            //           <h3>{{$unaTrivia->respuestaCorrecta}}</h3>
            //       </div>
            //     </div>
            //   </ul>
            //   <p>{{$unaTrivia->ayuda}}</p>
            // @endforeach
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $todasCategory = Category::all();
        return view('trivias.editar-category', ['todasCategory' => $todasCategory]);
    }

//todo esto podria estar en un edit solo

    public function editCategoria()
    {
        // Este foreach nos muestra el producto, de ahí podemos sacar los datos que querramos. En este caso $producto es una collection (lo cual es un array potenciado, de la mano de eloquent) y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.

        $todasCategory = Category::all();
        return view('trivias.editar-category', ['todasCategory' => $todasCategory]);
    }
    //
    //
    public function editTrivia($trivia_category_id)
    {
        // $todasTrivia = Trivia::all();
        $unaTrivia = Trivia::where('trivia_category_id', $trivia_category_id)->get();
        return view('trivias.editar-trivias', ['unaTrivia' => $unaTrivia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function prueba(Request $request)
    {
        dd($request->color);
    }
}
