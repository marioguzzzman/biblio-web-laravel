<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'trivia_category'; // $table es palabra reservada, siempre protected

  public function trivias() {
    return $this->hasMany('\App\Trivia', 'trivia_category_id');
}
}
