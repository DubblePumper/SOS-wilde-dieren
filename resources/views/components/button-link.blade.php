@props([
    'href',
    'variant' => 'primary',
])

<a {{ $attributes->class(['button', 'button-primary' => $variant === 'primary', 'button-secondary' => $variant === 'secondary']) }} href="{{ $href }}">
    {{ $slot }}
</a>
