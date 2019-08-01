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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index'); // Listar Posts
Route::get('/posts/{id}/show', 'PostController@show'); // Ver Post del ID
Route::get('/posts/create', 'PostController@create');  // Carga formulario de registro
Route::post('/posts', 'PostController@store');         // Realiza registro del post
Route::delete('/posts/{id}/destroy','PostController@destroy'); // Eliminar post
Route::get('/posts/{id}/edit','PostController@edit');          // Cargar vista Editar Post con su respectivo ID
Route::post('/posts/{id}/update','PostController@update');          // Cargar vista Editar Post con su respectivo ID