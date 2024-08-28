<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Adotante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 sm:px-20">

                <!-- Exibição de erros de validação -->
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

                <form action="{{ route('adotantes.update', $adotante->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="cpf" class="block text-sm font-medium text-gray-700">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="mt-1 block w-full" value="{{ old('cpf', $adotante->cpf) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
                        <input type="text" name="nome" id="nome" class="mt-1 block w-full" value="{{ old('nome', $adotante->nome) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full" value="{{ old('email', $adotante->email) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="mt-1 block w-full" value="{{ old('endereco', $adotante->endereco) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="mt-1 block w-full" value="{{ old('telefone', $adotante->telefone) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Data de Nascimento</label>
                        <input type="date" name="data_nascimento" id="data_nascimento" class="mt-1 block w-full" value="{{ old('data_nascimento', $adotante->data_nascimento) }}" required>
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
</x-app-layout>
