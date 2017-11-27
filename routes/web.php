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
/*
|------------------------------------------
| Principales
|------------------------------------------
*/

Route::get('/', 'HomeController@index'); //se muuestra el index
Route::get('/usuario-dashboard', 'UsuarioDashController@index');

/*
|------------------------------------------
| Trivias
|------------------------------------------
*/
//VISTA DEL PÚBLICO
Route::get('/trivias', 'TriviasController@index');//muestra el menú
Route::get('/trivias/{trivia_category_id}', 'TriviasController@show'); //muestra una trivia en el trivia master

//-----------ADMIN DE TRIVIAS--------------

//PARA AGREGAR TRIVIAS
Route::get('/crear/trivias/', 'TriviasController@create'); //nos lleva al formulario
Route::post('/agregar/trivias/', 'TriviasController@store');

//PARA EDITAR TRIVIAS
Route::get('/editar-categoria', 'TriviasController@editCategoria'); //muestra las categorias para editar
Route::get('/editar-trivias/{trivia_category_id}', 'TriviasController@editTrivia'); //muestra las categorias para editar

Route::get('/trivias/{id}/edit', 'TriviasController@edit');
Route::patch('/trivias/{id}', 'TriviasController@update');


/*
|------------------------------------------
| Juegos de escritura
|------------------------------------------
*/
Route::get('/castillo', 'CastilloController@index');



/*
|------------------------------------------
| Auth
|------------------------------------------
*/
//estas son nuevas, aun no las exploro demasiado
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
