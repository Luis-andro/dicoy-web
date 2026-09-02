{{-- resources/views/livewire/index.blade.php --}}
<div class="app-shell">

    <div id="inicio">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo" style="margin: 0px 24px; width: 120px; height: auto;" />

    </div>
    {{-- ── Header ── --}}
    <nav class="nav">
        <div class="nav-links" style="margin-left: auto;">
            <a href="#inicio" class="nav-link">Inicio</a>
            <a href="#" class="nav-link">Catálogo</a>
            <a href="#" class="nav-link">Contacto</a>
        </div>
    </nav>

    <main class="page">
        {{-- ── Sobre nosotros ── --}}
        <section style="padding: 20px 24px;">
            <h1 class="section-title">Acerca de nosotros</h1>

            <div class="divider"></div>
            <div class="placeholder-block">
                Sección "Sobre nosotros" — próximamente
            </div>
        </section>
    </main>

    <x-footer />
</div>
