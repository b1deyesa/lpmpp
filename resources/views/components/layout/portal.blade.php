<x-layout.app class="portal">
    
    {{-- Navbar --}}
    <x-navigation.portal />
    
    {{-- Slot --}}
    <section class="{{ $class }}">
        {{ $slot }}
    </section>
    
    {{-- Footer --}}
    <x-footer />
    
</x-layout.app>