{{-- resources/views/livewire/index.blade.php --}}
<div>
    

    <div id="inicio">
        {{-- ── Carrusel (se implementará más adelante) ── --}}
        <div class="placeholder-block" style="border-radius: 0; min-height: 90px;">
            Carrusel — próximamente
        </div>

    </div>
    {{-- ── Header ── --}}
    <nav class="nav">
        <div class="nav-links" style="margin-left: auto;">
            <a href="#inicio" class="nav-link">Inicio</a>
            <a href="#" class="nav-link">Catálogo</a>
            <a href="#" class="nav-link">Contacto</a>
        </div>
    </nav>

    <div>
        {{-- ── Sobre nosotros ── --}}
        <section style="padding: 20px 24px;">
            <h1 class="section-title">Acerca de nosotros</h1>

            <div class="divider"></div>
            <div class="placeholder-block">
                Sección "Sobre nosotros" — próximamente
            </div>
        </section>    
    </div>
    {{-- ── Footer ── --}}
    <footer class="footer">
        <p class="name">Estambres Dicoy</p>
        <p class="copyright">&copy; {{ date('Y') }} Estambres Dicoy. Todos los derechos reservados.</p>
    </footer>
</div>
