<?php

namespace App\Http\Controllers;

use App\Models\NisCtrChamadosArea;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NisCtrChamadosAreaController extends Controller
{
    public function index()
    {
        $dbData = NisCtrChamadosArea::all();

        return Inertia::render('NisCtrChamadosArea', [
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
     * @param  \App\Models\NisCtrChamadosArea  $nisCtrChamadosArea
     * @return \Illuminate\Http\Response
     */
    public function show(NisCtrChamadosArea $nisCtrChamadosArea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NisCtrChamadosArea  $nisCtrChamadosArea
     * @return \Illuminate\Http\Response
     */
    public function edit(NisCtrChamadosArea $nisCtrChamadosArea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NisCtrChamadosArea  $nisCtrChamadosArea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NisCtrChamadosArea $nisCtrChamadosArea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NisCtrChamadosArea  $nisCtrChamadosArea
     * @return \Illuminate\Http\Response
     */
    public function destroy(NisCtrChamadosArea $nisCtrChamadosArea)
    {
        //
    }
}
