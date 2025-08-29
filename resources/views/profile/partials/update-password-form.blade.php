<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Atualizar Senha') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Garanta que sua conta esteja usando uma senha longa e aleatória para se manter segura.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Senha Atual')" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                    <i class="bi bi-lock-fill text-gray-400"></i>
                </div>
                <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" placeholder="Digite a senha atual"/>
            </div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('Nova Senha')" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                    <i class="bi bi-lock-fill text-gray-400"></i>
                </div>
                <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" placeholder="Digite a senha nova"/>
            </div>
            
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirmar Senha')" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                    <i class="bi bi-lock-fill text-gray-400"></i>
                </div>
                <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" placeholder="Confirme a senha nova"/>
            </div>
            
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Salvar') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Salvo.') }}</p>
            @endif
        </div>
    </form>
</section>