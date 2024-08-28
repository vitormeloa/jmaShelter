<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Adotantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <a href="{{ route('adotantes.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 mb-4">
                        Cadastrar Adotante
                    </a>
                    <table class="table-auto w-full">
                        <thead>
                        <tr>
                            <th class="border px-4 py-2">Nome</th>
                            <th class="border px-4 py-2">Email</th>
                            <th class="border px-4 py-2">Telefone</th>
                            <th class="border px-4 py-2">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($adotantes as $adotante)
                            <tr>
                                <td class="border px-4 py-2">{{ $adotante->nome }}</td>
                                <td class="border px-4 py-2">{{ $adotante->email }}</td>
                                <td class="border px-4 py-2">{{ $adotante->telefone }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('adotantes.edit', $adotante->id) }}" class="inline-flex items-center px-4 py-2 bg-yellow-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-600 active:bg-yellow-700 focus:outline-none focus:border-yellow-700 focus:ring ring-yellow-300 disabled:opacity-25 transition ease-in-out duration-150">
                                        Editar
                                    </a>
                                    <form action="{{ route('adotantes.destroy', $adotante->id) }}" method="POST" style="display:inline-block;">
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
    </div>
</x-app-layout>
