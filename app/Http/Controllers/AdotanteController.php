<?php

namespace App\Http\Controllers;

use App\Models\Adotante;
use Illuminate\Http\Request;

class AdotanteController extends Controller
{
    public function index()
    {
        $adotantes = Adotante::all();
        return view('adotantes.index', compact('adotantes'));
    }

    public function create()
    {
        return view('adotantes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cpf' => 'required|unique:adotantes',
            'nome' => 'required',
            'email' => 'required|email|unique:adotantes',
            'endereco' => 'required',
            'telefone' => 'required',
            'data_nascimento' => 'required',
        ]);

        Adotante::create($request->all());

        return redirect()->route('adotantes.index')
            ->with('success', 'Adotante criado com sucesso.');
    }

    public function show(Adotante $adotante)
    {
//        return view('adotantes.show', compact('adotante'));
    }

    public function edit(Adotante $adotante)
    {
        return view('adotantes.edit', compact('adotante'));
    }

    public function update(Request $request, Adotante $adotante)
    {
        $request->validate([
            'cpf' => 'nullable|unique:adotantes,cpf,'.$adotante->id,
            'nome' => 'nullable',
            'email' => 'nullable|email|unique:adotantes,email,'.$adotante->id,
            'endereco' => 'nullable',
            'telefone' => 'nullable',
            'data_nascimento' => 'nullable',
        ]);

        $adotante->update($request->all());

        return redirect()->route('adotantes.index')
            ->with('success', 'Adotante atualizado com sucesso.');
    }

    public function destroy(Adotante $adotante)
    {
        $adotante->delete();

        return redirect()->route('adotantes.index')
            ->with('success', 'Adotante excluído com sucesso.');
    }
}
