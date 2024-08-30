<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Acompanhamentos Pós-Adoção') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <a href="{{ route('acompanhamentos.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 mb-4">
                    Registrar Acompanhamento
                </a>
                <table class="table-auto w-full">
                    <thead>
                    <tr>
                        <th class="border px-4 py-2">Animal</th>
                        <th class="border px-4 py-2">Adotante</th>
                        <th class="border px-4 py-2">Data da Visita</th>
                        <th class="border px-4 py-2">Avaliação de Saúde</th>
                        <th class="border px-4 py-2">Avaliação do Relacionamento</th>
                        <th class="border px-4 py-2">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($acompanhamentos as $acompanhamento)
                        <tr>
                            <td class="border px-4 py-2">{{ $acompanhamento->animal->nome }}</td>
                            <td class="border px-4 py-2">{{ $acompanhamento->adotante->nome }}</td>
                            <td class="border px-4 py-2">{{ $acompanhamento->data_visita }}</td>
                            <td class="border px-4 py-2">{{ $acompanhamento->avaliacao_saude }}</td>
                            <td class="border px-4 py-2">{{ $acompanhamento->avaliacao_relacionamento }}</td>
                            <td class="border px-4 py-2 flex space-x-2">
                                <a href="{{ route('acompanhamentos.show', $acompanhamento->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Visualizar
                                </a>
                                <a href="{{ route('acompanhamentos.edit', $acompanhamento->id) }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-600 active:bg-yellow-700 focus:outline-none focus:border-yellow-700 focus:ring ring-yellow-300 disabled:opacity-25 transition ease-in-out duration-150">
                                    Editar
                                </a>
                                <form action="{{ route('acompanhamentos.destroy', $acompanhamento->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 active:bg-red-800 focus:outline-none focus:border-red-800 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
