<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class REF_Trivias_Category extends Model
{
  protected $table = "REF_trivias_categories";

  protected $guarded = [];

  public function questions(){
    return $this->hasMany('\App\DB_Question', 'cat_id', 'id');

    // 1. Modelo de los datos que se van a traer
    // 2. Foreign Key de ese modelo apuntando al actual
    // 3. Primary Key del modelo actual
  }
}
