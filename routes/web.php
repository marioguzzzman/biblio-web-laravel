<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'HomeController@index');

Route::get('/login', 'LoginController@index');

Route::get('/registro', 'RegistroController@index');

Route::get('/usuario-dashboard', 'UsuarioDashController@index');

//-----Trivias
Route::get('/trivias', 'TriviasController@index');
Route::get('/trivias/{trivia_category_id}', 'TriviasController@show'); //muestra una trivia

// Route::get('/trivias/{$trivia_category_id}', 'TriviasController@showUnaTrivia');

Route::get('/editar-trivias', 'TriviasController@edit');
/*
Route::get('/trivias/arte-m', function () {
    return view('/trivias.trivia-master');
});
*/

Route::get('/castillo', 'CastilloController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
