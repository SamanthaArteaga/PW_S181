<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadirFromRecuerdos;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }
    public function metodoFormulario(){
        return view('Formulario');
    }
    public function metodoRecuerdos(){
        return view('Recuerdos');
    }
    public function guardarRecuerdo(validadirFromRecuerdos $req){
       /*  $validated = $req->validate([
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:4 ',
        ]); */
    
        return redirect('/form')->with('confirmacion', 'Tu recuerdo llego al controlador');

       /*  echo "<p>";
        echo $req->ip();
        echo " - ";
        echo $req->path();
        echo " - ";
        echo $req->method();
        echo " - ";
        echo $req->input('txtTitulo');
        echo "</p>"; */
    }
}