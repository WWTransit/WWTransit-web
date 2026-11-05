@props(['name'])

@php
    $paths = [
        'arrow' => 'M5 12h14m-6-6 6 6-6 6',
        'route' => 'M5 5h10a4 4 0 0 1 0 8H9a4 4 0 0 0 0 8h10M5 2v6M19 18v6',
        'search' => 'M21 21l-5-5M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0',
        'pin' => 'M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0ZM15 10a3 3 0 1 1-6 0 3 3 0 0 1 6 0',
        'clock' => 'M12 8v5l3 2M22 12a10 10 0 1 1-20 0 10 10 0 0 1 20 0',
        'train' => 'M7 19h10a2 2 0 0 0 2-2V5a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v12a2 2 0 0 0 2 2ZM5 11h14M8 15h.01M16 15h.01M8 19l-3 3m11-3 3 3M9 6h6',
        'bus' => 'M6 19h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2ZM4 11h16M8 15h.01M16 15h.01M7 19v2m10-2v2M1 7v4m22-4v4',
        'tram' => 'M8 19h8a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v9a3 3 0 0 0 3 3ZM5 12h14M8 16h.01M16 16h.01M12 4V1m-4 0h8M8 19l-2 3m10-3 2 3',
        'metro' => 'M4 21V8a8 8 0 0 1 16 0v13M8 20V9l4 5 4-5v11',
        'check' => 'm5 12 4 4L19 6',
        'code' => 'm8 6-6 6 6 6m8-12 6 6-6 6m-3-15-2 18',
        'info' => 'M12 11v6m0-10h.01M22 12a10 10 0 1 1-20 0 10 10 0 0 1 20 0',
        'menu' => 'M4 6h16M4 12h16M4 18h16',
        'user' => 'M20 21v-2a6 6 0 0 0-6-6h-4a6 6 0 0 0-6 6v2M16 5a4 4 0 1 1-8 0 4 4 0 0 1 8 0',
    ];
@endphp

<svg {{ $attributes->class(['icon']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
    <path d="{{ $paths[$name] ?? $paths['info'] }}" />
</svg>
