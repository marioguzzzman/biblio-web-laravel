<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DB_Question extends Model
{
  public $fillable = ['pregunta', 'ayuda', 'respuesta1', 'respuesta2', 'respuestaCorrecta', 'cat_id', 'img'];
  protected $table = 'trivias'; // $table es palabra reservada, siempre protected

  public function category(){
    return $this->belongsTo('\App\REF_Trivias_Category', 'cat_id', 'id');

    // 1. Modelo de los datos que se van a traer
    // 2. Foreign Key de ese modelo apuntando al actual
    // 3. Primary Key del modelo actual
  }

  public function questions_answers() {
    return $this->belongsToMany('\App\DB_Answer', 'Rel_questions_answers', 'id_pregunta', 'id_respuesta');
    // 1. Modelo de los datos que se van a traer
    // 2. Tabla que une a ambos modelos
    // 3. Foreign Key del modelo actual
    // 4. Foreign Key del otro modelo

  }
}
