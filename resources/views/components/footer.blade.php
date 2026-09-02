@props([
    'name' => 'Estambres Dicoy',
])

<footer {{ $attributes->class('footer') }}>
    <p class="name">{{ $name }}</p>
    <p class="copyright">&copy; {{ date('Y') }} {{ $name }}. Todos los derechos reservados.</p>
</footer>
