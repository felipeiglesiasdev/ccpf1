<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

        <!-- Link para os Ícones do Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div x-data="{ sidebarOpen: true }" class="flex h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Conteúdo Principal -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Header do Conteúdo (para telas pequenas) -->
                <header class="flex items-center justify-between p-4 bg-white dark:bg-gray-800 border-b dark:border-gray-700 lg:hidden">
                    <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 dark:text-gray-300 focus:outline-none">
                        <i class="bi bi-list text-2xl"></i>
                    </button>
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                        @isset($header)
                            {{ $header }}
                        @endisset
                    </h2>
                    <div></div> <!-- Apenas para centralizar o título -->
                </header>
                
                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 dark:bg-gray-900">
                    <div class="container mx-auto px-6 py-8">
                        <!-- Título da Página (Visível em telas grandes) -->
                        <div class="hidden lg:block mb-8">
                            @isset($header)
                                <h2 class="font-semibold text-3xl text-gray-800 dark:text-gray-200 leading-tight">
                                    {{ $header }}
                                </h2>
                            @endisset
                        </div>
                        
                        <!-- Conteúdo da Página -->
                        {{ $slot }}
                    </div>
                </main>
            </div>

        </div>
    </body>
</html>
