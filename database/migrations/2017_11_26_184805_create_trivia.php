<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrivia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('trivias', function (Blueprint $table) {
          $table->smallIncrements('pregunta');
          $table->string('ayuda');
          $table->string('respuesta1');
          $table->string('respuesta2');
          $table->string('respuestaCorrecta');
          $table->smallInteger('trivia_category_id');
          $table->string('img');
          $table->string('slug');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('trivias');
    }
}
