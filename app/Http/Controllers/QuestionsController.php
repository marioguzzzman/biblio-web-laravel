<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DB_Question;
use App\REF_Trivias_Category;
use App\Rel_Question_Answer;
use App\DB_Answer;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categoryAll es una collection:un array potenciado, de la mano de eloquent, y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.
        $categoryAll = REF_Trivias_Category::all();
        $variables = [
        'categoryAll' => $categoryAll,
      ];
        return view('trivias.preguntasMenu', $variables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryAll = REF_Trivias_Category::all();
        $variables = [
      'categoryAll' => $categoryAll,
    ];
        return view('trivias.crearTrivia', $variables);
    }

    /**
     * Store a newly created resource in storage.
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
        "cat_id" => "required",
        // "category_id" => "required|numeric|between:1,3"
      ];

      $messages = [
        "required" => "La :attribute es requerida!",
        // "numeric" => "El :attribute tiene que ser un número",
        // "between" => "El :attribute tiene que estar entre :min y :max."
      ];

      $request->validate($rules, $messages);

      $trivia = DB_Question::create([
        'pregunta' => $request->input('pregunta'),
        'ayuda' => $request->input('ayuda'),
        'respuesta1' => $request->input('respuesta1'),
        'respuesta2' => $request->input('respuesta2'),
        'respuestaCorrecta' => $request->input('respuestaCorrecta'),
        'cat_id' => $request->input('cat_id'),
      ]);

      $category = REF_Trivias_Category::create([
        'trivia_category' => $request->input('trivia_category'),
      ]);

      $trivia->category()->associate($category);
      $trivia->save();

      return redirect('/preguntasMenu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $questions = DB_Question::where('cat_id', $id)->get();

        $questions = DB_Question::where('cat_id', $id)->inRandomOrder()->take(10)->get();//para que funcionen al azar las preguntas

        foreach ($questions as $question) {
          $question->questions_answers->shuffle()->take(3);
        }

        $variables = [
          "questions" => $questions,
      		// "category" => $questions->category,
          // "category" => $unaTrivia->category,//esto dice nico que no es necesario
        ];
        return view('trivias.triviaMasterShow', $variables);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
