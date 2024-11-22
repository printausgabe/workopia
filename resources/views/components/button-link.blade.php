@props([
    'url' => '/',
    'icon' => null,
    'background' => 'bg-yellow-500',
    'hover' => 'hover:bg-yellow-600',
    'textcl' => 'text-black',
])

<a href="{{ $url }}"
    class="{{ $background }} {{ $textcl }} px-4 py-2 rounded {{ $hover }}
    transition duration-300">
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
