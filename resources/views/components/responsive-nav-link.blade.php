@props(['active'])

@php
$classes = ($active ?? false)
            ? 'font-semibold text-black dark:text-white hover:text-zinc-600 dark:hover:text-zinc-600'
            : 'text-zinc-600 text-zinc-700 dark:text-zinc-500 hover:text-black dark:hover:text-white, cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
