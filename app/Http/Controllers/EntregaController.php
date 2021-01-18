<?php

namespace App\Http\Controllers;

use App\Models\entrega;
use Illuminate\Http\Request;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = array();
        return view('site.sobre.entrega', $dados);
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
     * @param  \App\Models\entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function show(entrega $entrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function edit(entrega $entrega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entrega $entrega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\entrega  $entrega
     * @return \Illuminate\Http\Response
     */
    public function destroy(entrega $entrega)
    {
        //
    }
}
