<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar o seu e-mail que enviaremos um link para você criar uma nova senha.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="sr-only"/>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                    <i class="bi bi-envelope-fill text-gray-400"></i>
                </div>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Endereço de e-mail" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar Link de Redefinição de Senha') }}
            </x-primary-button>
        </div>
    </form>
    <!-- Link para Voltar -->
        <div class="text-center text-sm text-gray-600 dark:text-gray-400 pt-4">
          <p>Lembrou da senha? 
            <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
              Voltar ao login
            </a>
          </p>
        </div>

</x-guest-layout>
