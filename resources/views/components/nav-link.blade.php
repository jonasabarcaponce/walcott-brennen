@props(['active'])

@php
$classes = ($active ?? false)
            ? 'p-4 bg-jamband/20 flex items-center rounded-3xl font-bold text-md px-8 w-full transition-colors duration-300'
            : 'p-4 hover:bg-jamband/20 flex items-center rounded-3xl font-bold text-md px-8 w-full transition-colors duration-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
