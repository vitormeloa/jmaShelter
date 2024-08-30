<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Animal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900">Nome: {{ $animal->nome }}</h3>
                <p class="mt-1 text-sm text-gray-600">Espécie: {{ $animal->especie }}</p>
                <p class="mt-1 text-sm text-gray-600">Raça: {{ $animal->raca }}</p>
                <p class="mt-1 text-sm text-gray-600">Data de Chegada: {{ $animal->data_chegada }}</p>
                <p class="mt-4 text-sm text-gray-600"><strong>Descrição:</strong> {{ $animal->descricao }}</p>
                <p class="mt-4 text-sm text-gray-600"><strong>Vacinado:</strong> {{ $animal->vacinado ? 'Sim' : 'Não' }}</p>
                <p class="mt-4 text-sm text-gray-600"><strong>Castrado:</strong> {{ $animal->castrado ? 'Sim' : 'Não' }}</p>
                <p class="mt-4 text-sm text-gray-600"><strong>Status:</strong> {{ $animal->status }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
