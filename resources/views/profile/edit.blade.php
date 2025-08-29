<x-app-layout>
    <x-slot name="header">
        {{ __('Meu Perfil') }}
    </x-slot>

    <div class="space-y-6">
        <!-- Card: Atualizar Informações do Perfil -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-sm rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Card: Atualizar Senha -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-sm rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Card: Deletar Usuário -->
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow-sm rounded-lg">
            <div class="max-w-xl">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
