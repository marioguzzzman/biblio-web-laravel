<?php

namespace App\Http\Controllers;

use App\Trivia;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Este foreach nos muestra el unatrivia, de ahí podemos sacar los datos que querramos. En este caso $unaTrivia es una collection (lo cual es un array potenciado, de la mano de eloquent) y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($trivia_category_id)
    {
      // $request=$request->input();
        $unaTrivia = Trivia::where('trivia_category_id', $trivia_category_id)->get();
        return view('trivias.trivia-master', ['unaTrivia' => $unaTrivia]);

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
    public function edit()
    {
        // Este foreach nos muestra el producto, de ahí podemos sacar los datos que querramos. En este caso $producto es una collection (lo cual es un array potenciado, de la mano de eloquent) y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.
        $todasTrivia = Trivia::all();
        return view('trivias.editar-trivias', ['todasTrivia' => $todasTrivia]);
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
