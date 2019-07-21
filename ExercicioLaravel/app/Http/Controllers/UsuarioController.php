<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function show(){
    	return view('formulario');
    }
    public function tratar(Request $dados){
    	return 'cheguei<br>'.$dados->usuario.'<br>'.$dados->senha;
    }
}
