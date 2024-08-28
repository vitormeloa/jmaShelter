<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Animal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <form action="{{ route('animais.update', $animal->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                            <input type="text" name="nome" id="nome" class="mt-1 block w-full" value="{{ $animal->nome }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="especie" class="block text-sm font-medium text-gray-700">Espécie</label>
                            <input type="text" name="especie" id="especie" class="mt-1 block w-full" value="{{ $animal->especie }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="raca" class="block text-sm font-medium text-gray-700">Raça</label>
                            <input type="text" name="raca" id="raca" class="mt-1 block w-full" value="{{ $animal->raca }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="data_chegada" class="block text-sm font-medium text-gray-700">Data de Chegada</label>
                            <input type="date" name="data_chegada" id="data_chegada" class="mt-1 block w-full" value="{{ $animal->data_chegada }}" required>
                        </div>
                        <div class="mb-4">
                            <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                            <textarea name="descricao" id="descricao" class="mt-1 block w-full">{{ $animal->descricao }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="vacinado" class="block text-sm font-medium text-gray-700">Vacinado</label>
                            <select name="vacinado" id="vacinado" class="mt-1 block w-full" required>
                                <option value="1" {{ $animal->vacinado ? 'selected' : '' }}>Sim</option>
                                <option value="0" {{ !$animal->vacinado ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="castrado" class="block text-sm font-medium text-gray-700">Castrado</label>
                            <select name="castrado" id="castrado" class="mt-1 block w-full" required>
                                <option value="1" {{ $animal->castrado ? 'selected' : '' }}>Sim</option>
                                <option value="0" {{ !$animal->castrado ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full" required>
                                <option value="disponível" {{ $animal->status == 'disponível' ? 'selected' : '' }}>Disponível</option>
                                <option value="não disponível" {{ $animal->status == 'não disponível' ? 'selected' : '' }}>Não Disponível</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 mb-4">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
