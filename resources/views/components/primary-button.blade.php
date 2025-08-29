<button {{ $attributes->merge(['type' => 'submit', 'class' => 'group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-800 transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl']) }}>
    {{ $slot }}
</button>
