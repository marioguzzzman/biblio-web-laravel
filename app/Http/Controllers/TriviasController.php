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

    public function showUnaTrivia($trivia_category_id){
      // Este foreach nos muestra el producto, de ahí podemos sacar los datos que querramos. En este caso $producto es una collection (lo cual es un array potenciado, de la mano de eloquent) y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.


      $unaTrivia = Trivia::all()
          ->where('trivia_category_id', $trivia_category_id);

          foreach ($this->unaTrivia as $unaTrivia) {
            dd($unaTrivia);
          }

        return view('trivias.show', ['unaTrivia' => $unaTrivia]);
    }

    public function triviaDirect($nombre)
    {
        return view('/trivias/$nombre');

      // foreach ($this->peliculas as $id => $titulo) {
      //     // var_dump($titulo);
      //     if ($titulo==$nombre) {
      //         return "<h1>".$nombre."</h1>";
      //     } else {
      //         echo "no se encuentra esa peli".'<br />';
      //     }
      // }
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($trivia_category_id)
    {

      $unaTrivia = Trivia::all()
          ->where('trivia_category_id', $trivia_category_id);
        return view('trivias.show', ['unaTrivia' => $unaTrivia]);

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
      $trivia = Trivia::all();
        return view('trivias.show', ['trivia' => $trivia]);
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


    public function prueba(Request $request){
      dd($request->color);
    }
}
