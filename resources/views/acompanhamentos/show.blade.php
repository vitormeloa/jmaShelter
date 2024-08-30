<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Acompanhamento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900">Animal: {{ $acompanhamento->animal->nome }}</h3>
                <p class="mt-1 text-sm text-gray-600">Adotante: {{ $acompanhamento->adotante->nome }}</p>
                <p class="mt-1 text-sm text-gray-600">Data da Visita: {{ $acompanhamento->data_visita }}</p>
                <p class="mt-4 text-sm text-gray-600"><strong>Avaliação de Saúde:</strong> {{ $acompanhamento->avaliacao_saude }}</p>
                <p class="mt-4 text-sm text-gray-600"><strong>Observações:</strong> {{ $acompanhamento->observacoes }}</p>
                <p class="mt-4 text-sm text-gray-600"><strong>Avaliação do Relacionamento:</strong> {{ $acompanhamento->avaliacao_relacionamento }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
