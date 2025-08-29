@props(['value'])

<label {{ $attributes->merge(['class' => 'font-medium text-gray-700 dark:text-gray-700 mb-1 sr-only']) }}>
    {{ $value ?? $slot }}
</label>
