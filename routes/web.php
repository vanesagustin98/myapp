<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('docente', function () {
    return view('/docentes.docentes');
});
Route::get('estudiante', function () {
    return view('/estudiantes.estudiantes');
});
Route::get('programa', function () {
    return view('/programas.programas');
});
Route::get('facultad', function () {
    return view('/facultades.facultad');
});
Route::get('/materia', function () {
    return view('/materias.materia');
});
Route::get('/prueba/{parametro}', function ($parametro) {
    return "Este es un parametro: {$parametro}";
});
Route::get('/prueba2/{parametro}', function ($parametro) {
    return "Este es un parametro: {$parametro}";
})->where('parametro','[0-9]+');
Route::get('/prueba3/{parametro}', function ($parametro) {
    return "Este es un parametro: {$parametro}";
})->where('parametro','[a-y]+');
Route::get('/prueba4/{parametro?}', function ($parametro=null) {
    return "Este es un parametro: {$parametro}";
})->where('parametro','[a-y]+');
Route::get('/prueba5/{parametro1}/{parametro2?}', function ($parametro1, $parametro2=null) {
    return "Este es un parametro: {$parametro1}";
})->where('parametro1','[a-y]+');

//------------------------ACTIVIDAD----------------------------------------------
Route::get('actividad', function () {
    return view('/actividad');
});
Route::get('actividad2', function () {
    return view('/actividad.actividad');
});
Route::get('actividad3', function () {
    return view('/actividad.refundido.actividad');
});
Route::get('/actividad1/{parametro?}', function ($parametro) {
    return "Este es un parametro: {$parametro}";
});
Route::get('/actividad2/{parametro1}/{parametro2}', function ($parametro1, $parametro2) {
    return "Este es un parametro: {$parametro1} {$parametro2}";
});

Route::get('/actividad3/{parametro1}/{parametro2?}', function ($parametro1, $parametro2=null) {
    return "Este es un parametro: {$parametro1} {$parametro2}";
});
Route::get('/actividad4/{parametro}', function ($parametro) {
    return "Este es un parametro: {$parametro}";
})->where('parametro','[h,z,p]|[h,z,p]+[a-z]+');
Route::get('/actividad5/{parametro}', function ($parametro) {
    return "Este es un parametro: {$parametro}";
})->where('parametro','[5,7]');


