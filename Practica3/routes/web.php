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
/* Rutas de tipo petición */

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('formulario');
});

Route::get('/memories', function () {
    return view('recuerdos');
});
 */

Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/form', 'formulario')->name('apodoFormulario');
Route::view('/memories', 'recuerdos')->name('apodoRecuerdos');