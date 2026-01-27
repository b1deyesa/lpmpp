<x-layout.app class="guest">
    
    {{-- Navigation --}}
    <x-navigation.guest />
    
    {{-- Slot --}}
    <section class="{{ $class }}">
        {{ $slot }}
    </section>
    
    {{-- Footer --}}
    <x-footer />
    
    {{-- Alert --}}
    <x-alert />
    
    {{-- Loading --}}
    <x-loading />
    
</x-layout.app>