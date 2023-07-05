<?php

/* Catalogo de controladores */
use App\Http\Controllers\data\equipo_controller;
use App\Http\Controllers\data\empresa_controller;

/* Catalogo de librerias de uso */
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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

/*
|--------------------------------------------------------------------------
| Rutas de obtencion de datos REST API
|--------------------------------------------------------------------------
*/






Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/api.php';


/* ===== Rutas de cache ===== */

/* Union de funciones de limpieza de cache por ruta */
Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return redirect('/');
});

//Other Links
Route::get('/{other_link}', function () { return redirect('/'); });
