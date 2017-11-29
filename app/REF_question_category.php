<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class REF_question_category extends Model
{
  public $fillable = ['trivia_category'];

  protected $table = 'REF_trivias_categories'; // $table es palabra reservada, siempre protected

  public function questions() {
    return $this->hasMany('\App\DB_Question', 'cat_id', 'id');

  //   El orden de parametros es:
  // 1. Modelo de los datos que se van a traer
  // 2. Foreign Key de ese modelo apuntando al actual
  // 3. Primary Key del modelo actual
}
}
