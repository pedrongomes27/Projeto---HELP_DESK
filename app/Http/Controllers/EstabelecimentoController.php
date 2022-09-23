<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbData = Estabelecimento::all();

        return Inertia::render('Estabelecimento', [
            "dbData" => $dbData,
        ]);
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
     * @param  \App\Models\Estabelecimento  $estabelecimento
     * @return \Illuminate\Http\Response
     */
    public function show(Estabelecimento $estabelecimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estabelecimento  $estabelecimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Estabelecimento $estabelecimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estabelecimento  $estabelecimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estabelecimento $estabelecimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estabelecimento  $estabelecimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estabelecimento $estabelecimento)
    {
        $estabelecimento->delete();

        return redirect()->route('estabelecimento.index');
    }
}
