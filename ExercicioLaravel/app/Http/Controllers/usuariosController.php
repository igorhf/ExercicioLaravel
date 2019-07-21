<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usuariosController extends Controller
{

    public function index()
    {
        return view('formulario');
    }
  
    public function create()
    {
        //
    }
 
    public function store(Request $request)
    {
        $usuario = $request->usuario;
        $senha = $request->senha;
        $token = $request->_token;
        $senha_cryp = md5($senha);

        echo 'Usuario: '.$usuario.'<br>Senha: '.$senha_cryp.'<br>token: '.$token;
        echo '<br>'.md5($usuario);
        //$dados = DB::table('clientes')->get();
        //DB::insert('insert into clientes (nome, idade) values (?, ?)', ['igor', '26']);
        $dados = DB::select('select * from clientes ');
        echo '<br>'.count($dados);


        //dd($dados);
        foreach ($dados as $value) {
            echo '<br>'.$value->nome;
            echo ' '.$value->idade;
        }
    
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
