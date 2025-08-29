<!-- Sidebar -->
<aside 
    x-show="sidebarOpen" 
    x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in-out duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="fixed inset-y-0 left-0 z-30 w-72 flex flex-col bg-gray-800 text-gray-200 shadow-lg lg:static lg:inset-auto lg:translate-x-0">
    
    <!-- Logo e Título -->
    <div class="flex items-center justify-center h-20 border-b border-gray-700">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3">
            <i class="bi bi-layout-wtf text-3xl text-cyan-400"></i>
            <span class="text-2xl font-bold text-white">{{ config('app.name', 'Laravel') }}</span>
        </a>
    </div>

    <!-- Menu de Navegação -->
    <nav class="flex-1 px-4 py-6 space-y-2">
        <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 {{ request()->routeIs('dashboard') ? 'bg-gray-700 text-white' : 'text-gray-400 hover:bg-gray-700 hover:text-white' }}">
            <i class="bi bi-grid-1x2-fill mr-3"></i>
            <span>Dashboard</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 text-gray-400 hover:bg-gray-700 hover:text-white">
            <i class="bi bi-wallet-fill mr-3"></i>
            <span>Minha Carteira</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 text-gray-400 hover:bg-gray-700 hover:text-white">
            <i class="bi bi-calendar2-check-fill mr-3"></i>
            <span>Minhas Consultas</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2.5 rounded-lg transition-colors duration-200 text-gray-400 hover:bg-gray-700 hover:text-white">
            <i class="bi bi-plus-circle-fill mr-3"></i>
            <span>Nova Consulta</span>
        </a>
    </nav>

    <!-- Perfil do Usuário -->
    <div class="px-4 py-6 border-t border-gray-700">
        <div class="mb-4">
            <div class="font-semibold text-lg text-white">{{ Auth::user()->name }}</div>
            <div class="text-sm text-gray-400">{{ Auth::user()->email }}</div>
        </div>
        <a href="{{ route('profile.edit') }}" class="flex items-center w-full px-4 py-2.5 mb-2 text-left text-sm rounded-lg transition-colors duration-200 text-gray-400 hover:bg-gray-700 hover:text-white">
            <i class="bi bi-person-circle mr-3"></i>
            <span>Editar Perfil</span>
        </a>
        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" 
                onclick="event.preventDefault(); this.closest('form').submit();"
                class="flex items-center w-full px-4 py-2.5 text-left text-sm rounded-lg transition-colors duration-200 text-gray-400 hover:bg-red-500 hover:text-white">
                <i class="bi bi-box-arrow-right mr-3"></i>
                <span>Sair</span>
            </a>
        </form>
    </div>
</aside>