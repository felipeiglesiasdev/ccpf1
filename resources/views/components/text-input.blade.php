@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full pl-10 pr-4 py-2.5 bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500 transition-shadow duration-200']) }}>
