<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planta;

class PlantaController extends Controller
{
    public function store(Request $request)
    {
        $planta = new Planta();
        $planta->nome = $request->input('nome');
        $planta->especie = $request->input('especie');
        $planta->preco = $request->input('preco');
        $planta->qtd_estoque = $request->input('qtd_estoque');
        $planta->tamanho = $request->input('tamanho');
        $planta->save();

        return redirect()->back()->with('success', 'Planta inserida com sucesso.');
    }

    public function update(Request $request, $id)
    {
        $planta = Planta::findOrFail($id);
        $planta->nome = $request->input('nome');
        $planta->especie = $request->input('especie');
        $planta->preco = $request->input('preco');
        $planta->qtd_estoque = $request->input('qtd_estoque');
        $planta->tamanho = $request->input('tamanho');
        $planta->save();

        return redirect()->back()->with('success', 'Planta atualizada com sucesso.');
    }

    public function destroy($id)
    {
        $planta = Planta::findOrFail($id);
        $planta->delete();

        return redirect()->back()->with('success', 'Planta excluída com sucesso.');
    }
}
