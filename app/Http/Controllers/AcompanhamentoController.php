<?php

namespace App\Http\Controllers;

use App\Models\Acompanhamento;
use App\Models\Adocao;
use Illuminate\Http\Request;

class AcompanhamentoController extends Controller
{
    public function index()
    {
        $acompanhamentos = Acompanhamento::with(['adocao.animal', 'adocao.adotante'])->get();
        return view('acompanhamentos.index', compact('acompanhamentos'));
    }

    public function create()
    {
        $adocoes = Adocao::with(['animal', 'adotante'])->get();
        return view('acompanhamentos.create', compact('adocoes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'adocao_id' => 'required|exists:adocoes,id',
            'data_visita' => 'required|date',
            'avaliacao_saude' => 'nullable|string',
            'observacoes' => 'nullable|string',
            'avaliacao_relacionamento' => 'nullable|string',
        ]);

        Acompanhamento::create($request->all());

        return redirect()->route('acompanhamentos.index')->with('success', 'Acompanhamento registrado com sucesso.');
    }

    public function show($acompanhamento)
    {
        $acompanhamento = Acompanhamento::with(['adocao.animal', 'adocao.adotante'])->findOrFail($acompanhamento);

        return view('acompanhamentos.show', compact('acompanhamento'));
    }

    public function edit(Acompanhamento $acompanhamento)
    {
        $adocoes = Adocao::with(['animal', 'adotante'])->get();
        return view('acompanhamentos.edit', compact('acompanhamento', 'adocoes'));
    }

    public function update(Request $request, Acompanhamento $acompanhamento)
    {
        $request->validate([
            'adocao_id' => 'required|exists:adocoes,id',
            'data_visita' => 'required|date',
            'avaliacao_saude' => 'nullable|string',
            'observacoes' => 'nullable|string',
            'avaliacao_relacionamento' => 'nullable|string',
        ]);

        $acompanhamento->update($request->all());

        return redirect()->route('acompanhamentos.index')->with('success', 'Acompanhamento atualizado com sucesso.');
    }

    public function destroy(Acompanhamento $acompanhamento)
    {
        $acompanhamento->delete();

        return redirect()->route('acompanhamentos.index')->with('success', 'Acompanhamento excluído com sucesso.');
    }
}
