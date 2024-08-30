<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Acompanhamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if ($errors->any())
                    <div class="mb-4">
                        <div class="font-medium text-red-600">Ocorreu um erro na validação dos dados:</div>
                        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('acompanhamentos.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="adocao_id" class="block text-sm font-medium text-gray-700">Adoção</label>
                        <select name="adocao_id" id="adocao_id" class="mt-1 block w-full" required>
                            @foreach($adocoes as $adocao)
                                <option value="{{ $adocao->id }}">{{ $adocao->animal->nome }} - {{ $adocao->adotante->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="data_visita" class="block text-sm font-medium text-gray-700">Data da Visita</label>
                        <input type="date" name="data_visita" id="data_visita" class="mt-1 block w-full" value="{{ old('data_visita') }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="avaliacao_saude" class="block text-sm font-medium text-gray-700">Avaliação de Saúde</label>
                        <textarea name="avaliacao_saude" id="avaliacao_saude" class="mt-1 block w-full">{{ old('avaliacao_saude') }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="observacoes" class="block text-sm font-medium text-gray-700">Observações</label>
                        <textarea name="observacoes" id="observacoes" class="mt-1 block w-full">{{ old('observacoes') }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="avaliacao_relacionamento" class="block text-sm font-medium text-gray-700">Avaliação do Relacionamento</label>
                        <input type="text" name="avaliacao_relacionamento" id="avaliacao_relacionamento" class="mt-1 block w-full" value="{{ old('avaliacao_relacionamento') }}">
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 mb-4">
                            Registrar Acompanhamento
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
