<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/indexTareas', function(){
    $tareas = DB::table('tasks')->get();
    return view('tareas/indexTareas', compact('tareas'));
});

Route::get('/hola-mundo', function () {
    return view('paginas/hola-mundo');
});


/*Parametros a traves de la URL*/
Route::get('/grabaciones/{nombre}/{year?}/{cantidad?}', function ($nombre, $year=null, $cantidad =10) {
    /*dd($nombre); verificar si tengo la variable*/
    return view('paginas.grabaciones', compact('nombre', 'year', 'cantidad')); /* operador punto para directorios o archivos */
    /*Compact pasa la varible como texto
    -> with(['nombre]=> $nombre, 'otra => 'otra variable);
    
    */

});






