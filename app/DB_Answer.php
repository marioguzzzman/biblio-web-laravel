<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DB_Answer extends Model
{

  public $fillable = ['respuesta', 'respuesta_value'];

  protected $table = 'DB_Answers'; // $table es palabra reservada, siempre protected

  public function answers() {
	return $this->belongsToMany('\App\DB_Answer', 'Rel_questions_answers', 'id_respuesta', 'id_pregunta');
  // 1. Modelo de los datos que se van a traer
  // 2. Tabla que une a ambos modelos
  // 3. Foreign Key del modelo actual
  // 4. Foreign Key del otro modelo
}
}
