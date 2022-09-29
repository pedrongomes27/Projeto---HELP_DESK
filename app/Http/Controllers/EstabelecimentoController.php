<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;


class EstabelecimentoController extends Controller
{
    public function index()
    {
        $dbData = Estabelecimento::all();

        return Inertia::render('Estabelecimento', [
            "dbData" => $dbData,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'nome' => ['required'],
        ])->validate();

        $db = new Estabelecimento;

        $db->nome = $request['nome'];
        $db->estabelecimento_classificacao_id = $request['estabelecimento_classificacao_id'];
        $db->cnes = $request['cnes'];
        $db->tipo_id = $request['tipo_id'];
        $db->cidade_id = $request['cidade_id'];
        $db->latitude = $request['latitude'];
        $db->longitude = $request['longitude'];

        $db->save();

        return redirect()->back()
            ->with('message', 'Estabelecimento Created Successfully.');


        // $requestData = $request->all();
        // Estabelecimento::create($requestData);
        // return redirect()->back();
    }

    
    public function show(Estabelecimento $estabelecimento)
    {
        //
    }

    public function edit(Estabelecimento $estabelecimento)
    {
        //
    }

    public function update(Request $request)
    {
        Estabelecimento::find($request->id)->update($request->all());

        return redirect()->back()
                ->with('message', 'Estabelecimento Updated Successfully.');
    }

    public function destroy(Estabelecimento $estabelecimento)
    {
        $estabelecimento->delete();

        return redirect()->back()
            ->with('message', 'Estabelecimento deleted successfully.');
    }
}
