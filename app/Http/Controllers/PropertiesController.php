<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Http\Requests\StorePropertiesRequest;
use App\Http\Requests\UpdatePropertiesRequest;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Properties::all();
        return view('properties.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('properties.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertiesRequest $request)
    {
        $imovel = new Properties();
        $imovel->titulo = $request->input('titulo');
        $imovel->tipo = $request->input('tipo');
        $imovel->endereco = $request->input('endereco');
        $imovel->imagens = $request->input('imagens');
        $imovel->proprietario = $request->input('proprietario');
        $imovel->garagem = $request->input('garagem');
        $imovel->valor_condominio = $request->input('valor_condominio');
        $imovel->iptu = $request->input('iptu');
        $imovel->metros_quadrados = $request->input('metros_quadrados');
        $imovel->quantidade_banheiros = $request->input('quantidade_banheiros');
        $imovel->aceita_pets = $request->input('aceita_pets');
        $imovel->save();

        return redirect()->route('properties.index')->with('success', 'Imóvel criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Properties $properties)
    {
        return view('properties.show', compact('properties'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Properties $properties)
    {
        return view('properties.edit', compact('properties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropertiesRequest $request, Properties $properties)
    {
        $properties->titulo = $request->input('titulo');
        $properties->tipo = $request->input('tipo');
        $properties->endereco = $request->input('endereco');
        $properties->imagens = $request->input('imagens');
        $properties->proprietario = $request->input('proprietario');
        $properties->garagem = $request->input('garagem');
        $properties->valor_condominio = $request->input('valor_condominio');
        $properties->iptu = $request->input('iptu');
        $properties->metros_quadrados = $request->input('metros_quadrados');
        $properties->quantidade_banheiros = $request->input('quantidade_banheiros');
        $properties->aceita_pets = $request->input('aceita_pets');
        $properties->save();

        return redirect()->route('properties.index')->with('success', 'Imóvel atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Properties $properties)
    {
        $properties->delete();
        return redirect()->route('properties.index')->with('success', 'Imóvel excluído com sucesso!');
    }
}
