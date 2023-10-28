<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFromMuñeca;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view ('welcome');

    }
    public function metodoFormulario(){
        return view ('registro');

    }
    public function guardarRecuerdo(validadorFromMuñeca $req){

       return redirect('/form')->with('confirmacion', 'Tu libro ha sido guardado!'. $req->input('txtTitulo'))  ;

    }

}
