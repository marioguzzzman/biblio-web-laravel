<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DB_Question extends Model
{
  public $fillable = ['pregunta', 'ayuda', 'respuesta1', 'respuesta2', 'respuestaCorrecta', 'cat_id', 'img'];
  protected $table = 'trivias'; // $table es palabra reservada, siempre protected

  public function category(){
    return $this->belongsTo('\App\REF_question_category', 'cat_id', 'id');

    // 1. Modelo de los datos que se van a traer
    // 2. Foreign Key de ese modelo apuntando al actual
    // 3. Primary Key del modelo actual
  }
}
