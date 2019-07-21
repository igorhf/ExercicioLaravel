<?php

namespace App\Http\Controllers;

use App\noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dados = noticia::where('id_noticia',$id)->get();
        return $dados;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function edit(noticia $noticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, noticia $noticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\noticia  $noticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(noticia $noticia)
    {
        //
    }
}
