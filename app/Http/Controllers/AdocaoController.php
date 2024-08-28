<?php

namespace App\Http\Controllers;

use App\Models\Adocao;
use App\Models\Animal;
use App\Models\Adotante;
use Illuminate\Http\Request;

class AdocaoController extends Controller
{
    public function index()
    {
        $adocoes = Adocao::with(['animal', 'adotante'])->get();
        return view('adocoes.index', compact('adocoes'));
    }

    public function create()
    {
        $animais = Animal::query()->where('status', 'disponivel')->get();
        $adotantes = Adotante::all();
        return view('adocoes.create', compact('animais', 'adotantes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'animal_id' => 'required|exists:animais,id',
            'adotante_id' => 'required|exists:adotantes,id',
            'data_adocao' => 'required|date',
        ]);

        // Atualizar o status do animal para "não disponível"
        $animal = Animal::findOrFail($request->animal_id);
        $animal->update(['status' => 'indisponivel']);

        Adocao::create($request->all());

        return redirect()->route('adocoes.index')
            ->with('success', 'Adoção registrada com sucesso.');
    }

    public function edit($adocao)
    {
        $adocao = Adocao::findOrFail($adocao);
        $animais = Animal::where('status', 'disponivel')
            ->orWhere('id', $adocao->animal_id)
            ->get();
        $adotantes = Adotante::all();

        return view('adocoes.edit', compact('adocao', 'animais', 'adotantes'));
    }

    public function update(Request $request, $adocao)
    {
        $request->validate([
            'animal_id' => 'nullable|exists:animais,id',
            'adotante_id' => 'nullable|exists:adotantes,id',
            'data_adocao' => 'nullable|date',
        ]);

        $adocao = Adocao::with('animal')->findOrFail($adocao);

        if ($adocao->animal_id !== $request->animal_id) {
            $adocao?->animal->update(['status' => 'disponivel']);
            $animal = Animal::findOrFail($request->animal_id);
            $animal->update(['status' => 'indisponivel']);
        }

        $adocao->update($request->all());

        return redirect()->route('adocoes.index')
            ->with('success', 'Adoção atualizada com sucesso.');
    }

    public function destroy($adocao)
    {
        $adocao = Adocao::with('animal')->findOrFail($adocao);

        // Atualiza o status do animal para 'disponível'
        $adocao->animal->update(['status' => 'disponivel']);

        $adocao->delete();

        return redirect()->route('adocoes.index')
            ->with('success', 'Adoção excluída com sucesso.');
    }
}
