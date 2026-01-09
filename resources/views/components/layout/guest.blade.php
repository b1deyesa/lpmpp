<x-layout.app class="guest">
    
    {{-- Navbar --}}
    <x-navbar />
    
    {{-- Slot --}}
    <section class="{{ $class }}">
        {{ $slot }}
    </section>
    
    {{-- Footer --}}
    <x-footer />
    
    {{-- Copyright --}}
    <x-copyright />
    
</x-layout.app>