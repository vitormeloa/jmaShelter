<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animais = Animal::all();
        return view('animais.index', compact('animais'));
    }

    public function create()
    {
        return view('animais.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'especie' => 'required',
            'raca' => 'required',
            'data_chegada' => 'required',
            'descricao' => 'nullable',
            'vacinado' => 'required',
            'castrado' => 'required',
            'status' => 'required',
        ]);

        Animal::create($request->all());

        return redirect()->route('animais.index')
            ->with('success', 'Animal criado com sucesso.');
    }

    public function show($animal)
    {
        $animal = Animal::findOrFail($animal);

        return view('animais.show', compact('animal'));
    }

    public function edit($animal)
    {
        $animal = Animal::findOrFail($animal);
        return view('animais.edit', compact('animal'));
    }

    public function update(Request $request, $animal)
    {
        $request->validate([
            'nome' => 'nullable',
            'especie' => 'nullable',
            'raca' => 'nullable',
            'data_chegada' => 'nullable|date',
            'descricao' => 'nullable',
            'vacinado' => 'nullable|boolean',
            'castrado' => 'nullable|boolean',
            'status' => 'nullable',
        ]);

        $animal = Animal::findOrFail($animal);

        $animal->update($request->all());

        return redirect()->route('animais.index')
            ->with('success', 'Animal atualizado com sucesso.');
    }

    public function destroy($animal)
    {
        $animal = Animal::findOrFail($animal);

        $animal->delete();

        return redirect()->route('animais.index')
            ->with('success', 'Animal excluído com sucesso.');
    }
}
