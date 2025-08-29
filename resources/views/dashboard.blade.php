<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div>
        <!-- Mensagem de Boas-Vindas -->
        <div class="bg-gradient-to-r from-cyan-500 to-blue-600 rounded-lg shadow-md p-6 mb-8">
            <h3 class="text-2xl text-white font-bold">Bem-vindo(a) de volta, {{ Auth::user()->name }}!</h3>
            <p class="text-cyan-100">Aqui está um resumo da sua atividade.</p>
        </div>

        

        <!-- Tabela de Exemplo -->
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h4 class="text-xl font-semibold mb-4">Últimas Consultas Realizadas!</h4>
                <p>Aqui você pode colocar uma tabela ou um gráfico com mais informações.</p>
            </div>
        </div>
    </div>
</x-app-layout>