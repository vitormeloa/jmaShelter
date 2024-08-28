<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Adoção') }}
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

                <form action="{{ route('adocoes.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="animal_id" class="block text-sm font-medium text-gray-700">Animal</label>
                        <select name="animal_id" id="animal_id" class="mt-1 block w-full" required>
                            @foreach($animais as $animal)
                                <option value="{{ $animal->id }}">{{ $animal->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="adotante_id" class="block text-sm font-medium text-gray-700">Adotante</label>
                        <select name="adotante_id" id="adotante_id" class="mt-1 block w-full" required>
                            @foreach($adotantes as $adotante)
                                <option value="{{ $adotante->id }}">{{ $adotante->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="data_adocao" class="block text-sm font-medium text-gray-700">Data da Adoção</label>
                        <input type="date" name="data_adocao" id="data_adocao" class="mt-1 block w-full" value="{{ old('data_adocao') }}" required>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-blue-900 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150 mb-4">
                            Registrar Adoção
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
