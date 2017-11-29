<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trivia extends Model
{
  // public $id;
  //   public $pregunta;
  //   public $ayuda;
  //   public $categoria_id;

    public $fillable = ['pregunta', 'ayuda', 'respuesta1', 'respuesta2', 'respuestaCorrecta', 'trivia_category_id', 'img'];
    protected $table = 'trivias'; // $table es palabra reservada, siempre protected

    public function category(){
      return $this->belongsTo('\App\Category', 'cat_id', 'id');
    }
}
