<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public $fillable = ['trivias_cat'];

  protected $table = 'trivia_category'; // $table es palabra reservada, siempre protected

  public function trivias() {
    return $this->hasMany('\App\Trivia', 'trivia_category_id', 'id');

  //   El orden de parametros es:
  // 1. Modelo de los datos que se van a traer
  // 2. Foreign Key de ese modelo apuntando al actual
  // 3. Primary Key del modelo actual
}
}
