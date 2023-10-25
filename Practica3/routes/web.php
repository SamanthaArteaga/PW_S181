<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;

/* //Rutas agurpadas por controlador
Route::controller(diarioController::class) ->group(function(){
    Route::get('/','metodoInicio')->name('apodoInicio');
    Route::get('/form','metodoFormulario')->name('apodoFormulario');
    Route::get('/memories','metodoRecuerdos')->name('apodoRecuerdos');
}); */




 
//* /Rutas individuales para controlador */
Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoInicio');
Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');
Route::get('/memories', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdo');

Route::post('/guardarRecuerdo', [diarioController::class,'guardarRecuerdo'])->name('guardar');


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
/* 
Route::view('/', 'welcome')->name('apodoInicio');
Route::view('/form', 'formulario')->name('apodoFormulario');
Route::view('/memories', 'recuerdos')->name('apodoRecuerdos'); */

