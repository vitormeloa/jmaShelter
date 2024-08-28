<x-guest-layout>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 sm:px-20">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Bem-vindo ao Sistema de Adoção de Animais</h1>
            <p class="text-gray-600 mb-8">
                Estamos felizes em ter você aqui! Por favor, faça login ou registre-se para começar.
            </p>

            <div class="flex justify-center space-x-4">
                <a href="{{ route('login') }}" class="btn btn-primary px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded-md">
                    Login
                </a>
                <a href="{{ route('register') }}" class="btn btn-secondary px-4 py-2 bg-gray-500 hover:bg-gray-700 text-white rounded-md">
                    Cadastro
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
