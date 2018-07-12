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

Route::get('/', function(){
    return view('home');
});

// VideoConferência
Route::get('/videoconferencia', 'VideoConferencia\HomeController@index');

// Projetos do aflora
Route::resource('/aflora', 'Aflora\HomeController');

// Análise Petrográfica
Route::resource('/analisepetro', 'AnalisePetrografica\HomeController');

//Requisições de laboratório
Route::resource('/reqlab', 'Reqlab\ReqlabController');
