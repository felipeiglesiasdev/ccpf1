<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Cabeçalho do Card -->
        <div class="text-center">
          <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Crie sua Conta</h2>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">É rápido e fácil!</p>
        </div>

        <!-- Campo de Nome -->
        <div>
            <x-input-label for="name" :value="__('Name')" class="sr-only"/>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                    <i class="bi bi-person-fill text-gray-400"></i>
                </div>
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nome" />
            </div>
        </div>


        <!-- Campo de E-mail -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="sr-only"/>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                <i class="bi bi-envelope-fill text-gray-400"></i>
              </div>
              <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Endereço de e-mail"/>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="sr-only" />
            <div class="relative">
                <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                    <i class="bi bi-lock-fill text-gray-400"></i>
                </div>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Senha"/>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>



        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="sr-only"/>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 h-full flex items-center pl-3 pointer-events-none">
                    <i class="bi bi-lock-fill text-gray-400"></i>
                </div>
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a senha"/>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Botão de Registro -->
          <div class="pt-2">
            <x-primary-button>
                {{ __('Registrar') }}
            </x-primary-button>
          </div>


          <!-- Link para Login -->
        <div class="text-center text-sm text-gray-600 dark:text-gray-400 pt-4">
          <p>Já possui uma conta? 
            <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
              Faça login
            </a>
          </p>
        </div>


    </form>
</x-guest-layout>
