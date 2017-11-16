<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trivia extends Model
{

  // public $id;
  //   public $pregunta;
  //   public $ayuda;
  //   public $categoria_id;
  //
  //   // public $connDB;

    public $fillable = ['pregunta', 'ayuda', 'categoria_id'];
    public static $tabla = 'trivias'; // propiedad estatica

}
