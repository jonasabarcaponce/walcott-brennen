@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex flex-col items-center p-4 text-jamband'
            : 'flex flex-col items-center p-4';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>