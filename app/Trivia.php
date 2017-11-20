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
    protected $table = 'trivias'; // $table es palabra reservada, siempre protected

    public function category(){
      return $this->belongsTo('\App\Category', 'trivia_category_id');
    }
}
