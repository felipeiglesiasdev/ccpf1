<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf
        <!-- Cabeçalho do Card -->
        <div class="text-center">
          <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Acesse sua Conta</h2>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Seja bem-vindo(a) de volta!</p>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                    <i class="bi bi-envelope-fill text-gray-400"></i>
                </div>
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Endereço de e-mail" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <div class="relative">
                <!-- Ícone de Senha -->
              <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                <i class="bi bi-lock-fill text-gray-400"></i>
              </div>
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Senha"/>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Opções Adicionais -->
          <div class="flex items-center justify-between text-sm">
            <div class="flex items-center">
              <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
              <label for="remember_me" class="ml-2 text-gray-600 dark:text-gray-300"><span>{{ __('Lembrar de mim') }}</span></label>
            </div>
            @if (Route::has('password.request'))
                <a class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300" href="{{ route('password.request') }}">
                    {{ __('Esqueceu a senha?') }}
                </a>
            @endif
          </div>



        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-800 transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl">
                {{ __('Entrar') }}
            </x-primary-button>
        </div>

        <!-- Link para Registro -->
        <div class="text-center text-sm text-gray-600 dark:text-gray-400 pt-4">
          <p>Não possui uma conta? 
            <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
              Registre-se
            </a>
          </p>
        </div>

    </form>
</x-guest-layout>
