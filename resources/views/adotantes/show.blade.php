<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Adotante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900">Nome: {{ $adotante->nome }}</h3>
                <p class="mt-1 text-sm text-gray-600">CPF: {{ $adotante->cpf }}</p>
                <p class="mt-1 text-sm text-gray-600">Email: {{ $adotante->email }}</p>
                <p class="mt-1 text-sm text-gray-600">Endereço: {{ $adotante->endereco }}</p>
                <p class="mt-1 text-sm text-gray-600">Telefone: {{ $adotante->telefone }}</p>
                <p class="mt-1 text-sm text-gray-600">Data de Nascimento: {{ $adotante->data_nascimento }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
