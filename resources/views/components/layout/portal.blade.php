<x-layout.app class="portal">
    
    {{-- Navbar --}}
    <x-portal-navbar />
    
    {{-- Slot --}}
    <section class="{{ $class }}">
        {{ $slot }}
    </section>
    
    {{-- Footer --}}
    <x-footer />
    
    {{-- Copyright --}}
    <x-copyright />
    
</x-layout.app>