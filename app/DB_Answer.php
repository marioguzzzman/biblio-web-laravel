<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DB_Answer extends Model
{

  public function answers() {
	return $this->belongsToMany('\App\Property', 'product_property', 'product_id', 'property_id');
}
}
