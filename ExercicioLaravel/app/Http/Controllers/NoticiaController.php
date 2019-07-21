<?php

namespace App\Http\Controllers;

use App\noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $dados = noticia::where('id_noticia',$id)->get();
        return $dados;
    }

    public function edit(noticia $noticia)
    {
        //
    }

    public function update(Request $request, noticia $noticia)
    {
        //
    }

    public function destroy(noticia $noticia)
    {
        //
    }
}
