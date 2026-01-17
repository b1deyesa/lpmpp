<x-layout.app class="guest">
    
    {{-- Navigation --}}
    <x-navigation.guest />
    
    {{-- Slot --}}
    <section class="{{ $class }}">
        {{ $slot }}
    </section>
    
    {{-- Footer --}}
    <x-footer />
    
    {{-- Copyright --}}
    <x-copyright />
    
</x-layout.app>