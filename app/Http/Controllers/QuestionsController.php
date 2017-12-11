<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DB_Question;
use App\REF_Trivias_Category;
use App\Rel_Question_Answer;
use App\DB_Answer;

class QuestionsController extends Controller
{

  /*
  |------------------------------------------
  | VISTA PRINCIPAL DE USUARIO
  |------------------------------------------
  */

    public function index()
    {
        //$categoryAll es una collection:un array potenciado, de la mano de eloquent, y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.
        $categoryAll = REF_Trivias_Category::all();
        $variables = [
        'categoryAll' => $categoryAll,
      ];
        return view('/trivias.preguntasMenu', $variables);
    }

    public function show($id)
    {
        $questions = DB_Question::where('cat_id', $id)->inRandomOrder()->take(10)->get();//para que funcionen al azar las preguntas

        foreach ($questions as $question) {
            $question->questions_answers->shuffle()->take(3);
        }

        $variables = [
           "questions" => $questions,
         ];
        return view('trivias.triviaMasterShow', $variables);
    }
    /*
    |------------------------------------------
    | SHOW EDITAR
    |------------------------------------------
    */


    public function showEditCategory()
    {
        //$categoryAll es una collection:un array potenciado, de la mano de eloquent, y nos permite acceder a sus propiedades de la misma forma que accedemos a atributos de un objeto.
        $categoryAll = REF_Trivias_Category::all();
        $variables = [
        'categoryAll' => $categoryAll,
      ];
        return view('/trivias.editar-category', $variables);
    }

    public function showEditTrivia($id)
    {
        $questions = DB_Question::where('cat_id', $id)->get();//para que funcionen al azar las preguntas

        foreach ($questions as $question) {
            $question->questions_answers->shuffle()->take(3);
        }

        $variables = [
        "questions" => $questions,
      ];
        return view('/trivias.editar-trivias', $variables);
    }

    /*
    |------------------------------------------
    |  EDITAR+ UPDATE
    |------------------------------------------
    */

    public function editCategory($id)
    {
        $questions = DB_Question::where('id', $id)->get();

        foreach ($questions as $question) {
            $question->questions_answers;
        }

        $variables = [
        "questions" => $questions,
      ];

        return view('/trivias.forumulario-edicion-cat', $variables);
    }

//-----------------------------  UPDATE -------------------------------

    public function updateCategory(Request $request, $id)
    {

      $question = DB_Question::find($id);
      // dd($question->questions_answers[0]);


      $question->pregunta = $request->input('pregunta');
      $question->ayuda = $request->input('ayuda');


      $question->questions_answers[0]->respuesta = $request->respuesta1;
      $question->questions_answers[0]->respuesta_value = 0;
      $question->questions_answers[1]->respuesta = $request->respuesta2;
      $question->questions_answers[1]->respuesta_value = 0;
      $question->questions_answers[2]->respuesta = $request->respuesta3;
      $question->questions_answers[2]->respuesta_value = 1;


      $question->questions_answers[0]->save();
      $question->questions_answers[1]->save();
      $question->questions_answers[2]->save();


  //---------------------------esto funciona------------------------------------

  $question->save();


      // $question->correcta_id = $request->input($request->respuesta3);

      //------------------------ciona/esto fu---------------------------------------



      return redirect('/categoria/editarCategoria/'.$id);
    }


    /*
    |------------------------------------------
    | CREAR
    |------------------------------------------
    */

    public function create()
    {
        $categoryAll = REF_Trivias_Category::all();

        $variables = [
          'categoryAll' => $categoryAll,
          // 'questionsAll' => $questionsAll,
        ];
        return view('/trivias.crearTrivia', $variables);
    }

 //--------------------  STORE -------------------------------

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

        $question = DB_Question::create([
          'pregunta' => $request->input('pregunta'),
          'ayuda' => $request->input('ayuda'),
          'cat_id' => $request->input('cat_id'),
        ]);

        //si la categoria es 0, entonces entonces crea una nueva, sino busca el cat_id
        if ($request->input('trivia_category') === 0) {
            $category = REF_Trivias_Category::create([
            'trivia_category' => $request->input('trivia_category'),
            // $user = User::firstOrCreate(['name' => 'John']);// Retrieve the user by the attributes, or create it if it doesn't exist...
          ]);
        } else {
            $category = REF_Trivias_Category::find($request->input('cat_id'));
        }

        // $answers = array (
        //   array("respuesta correcta", 0),
        //   );
        //     echo $answers[0][1];

        $answers[] = DB_Answer::create([ //a ver me falta el value
          'respuesta' => $request->input('respuesta1'), // como le pongo respuesta_value->respuesta->id, 0
          'respuesta_value' => 0, // como le pongo respuesta_value->respuesta->id, 0
        ]);
        $answers[] = DB_Answer::create([
          'respuesta' => $request->input('respuesta2'),
          'respuesta_value' => 0,
          ]);
        $answers[] = DB_Answer::create([
          'respuesta' => $request->input('respuestaCorrecta'),
          'respuesta_value' => 1,
          ]);

        $question->questions_answers()->sync([$answers[0]->id,$answers[1]->id,$answers[2]->id]); // pasamos el array de a poco // Para sincronizar nuestras propiedades, seleccionamos al producto y le aclaramos que queremos utilizar la función sync() asociada a nuestra función properties(). A su vez, le pasamos como parámetro a sync(), un array con los id de cada una de las properties que queremos agregarle.

        $question->category()->associate($category); // associate()nos pide como parametro un objeto del tipo que querramos asociar a nuestro producto, en este caso le pasamos un objeto del tipo category.
        $question->correcta_id = $answers[2]->id; //paso el id de la respuesta correcta directamente a la columna de correcta_id
        // $question->questions_answers()->sync([$answers[2]->id]);
        $question->save();

        return redirect('/preguntas/crear');
    }

    /*
    |------------------------------------------
    | ABORRAR
    |------------------------------------------
    */

    public function destroyCategory($id)
    {
        $category = REF_Trivias_Category::find($id);

        // $question->category()->associate($category);
        // $category->questions_answers()->sync([]);
        $category->delete();

        return redirect('/categoria/showEdit');
    }

    public function destroyTrivia($id)
    {
        $question = DB_Question::find($id);

        $question->questions_answers()->sync([]);

        $question->delete();

        return redirect('/categoria/showEdit');
    }
}
