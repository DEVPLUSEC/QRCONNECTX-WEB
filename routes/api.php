<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\data\equipo_controller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



/* ======= Rutas de CRUD de equipos (sch_equipo.tuni_equipo) ======= */

/* Funcion GET de equipos */
Route::get('/get_equipo', [equipo_controller::class, 'get_equipo']);
/* Funcion POST de equipos */
Route::post('/post_equipo', [equipo_controller::class, 'post_equipo']);
/* Funcion PUT de equipos */
Route::put('/put_equipo', [equipo_controller::class, 'put_equipo']);
/* Funcion DELETE de equipos */
Route::delete('/delete_equipo', [equipo_controller::class, 'delete_equipo']);

/* ======= Rutas de CRUD de equipos (sch_equipo.tuni_tipo_equipo) ======= */

/* Funcion GET de tipo_equipos */
Route::get('/get_tipo_equipo', [equipo_controller::class, 'get_tipo_equipo']);
/* Funcion POST de tipo_equipos */
Route::post('/post_tipo_equipo', [equipo_controller::class, 'post_tipo_equipo']);
/* Funcion PUT de tipo_equipos */
Route::put('/put_tipo_equipo', [equipo_controller::class, 'put_tipo_equipo']);
/* Funcion DELETE de tipo_equipos */
Route::delete('/delete_tipo_equipo', [equipo_controller::class, 'delete_tipo_equipo']);


/* ======= Rutas de CRUD de equipos (sch_equipo.tuni_mantenimiento) ======= */

/* Funcion GET de mantenimientos */
Route::get('/get_mantenimiento', [equipo_controller::class, 'get_mantenimiento']);
/* Funcion POST de mantenimientos */
Route::post('/post_mantenimiento', [equipo_controller::class, 'post_mantenimiento']);
/* Funcion PUT de mantenimientos */
Route::put('/put_mantenimiento', [equipo_controller::class, 'put_mantenimiento']);
/* Funcion DELETE de mantenimientos */
Route::delete('/delete_mantenimiento', [equipo_controller::class, 'delete_mantenimiento']);

/* ======= Rutas de CRUD de equipos (sch_equipo.tuni_tipo_mantenimiento) ======= */

/* Funcion GET de tipo_mantenimientos */
Route::get('/get_tipo_mantenimiento', [equipo_controller::class, 'get_tipo_mantenimiento']);
/* Funcion POST de tipo_mantenimientos */
Route::post('/post_tipo_mantenimiento', [equipo_controller::class, 'post_tipo_mantenimiento']);
/* Funcion PUT de tipo_mantenimientos */
Route::put('/put_tipo_mantenimiento', [equipo_controller::class, 'put_tipo_mantenimiento']);
/* Funcion DELETE de tipo_mantenimientos */
Route::delete('/delete_tipo_mantenimiento', [equipo_controller::class, 'delete_tipo_mantenimiento']);

