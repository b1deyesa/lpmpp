<x-layout.app class="dashboard">
    
    {{-- Navigation --}}
    <x-navigation.dashboard />
    
    {{-- Slot --}}
    <section class="{{ $class }}">
        {{ $slot }}
    </section>
    
    {{-- Alert --}}
    <x-alert />
    
    {{-- Loading --}}
    {{-- <x-loading /> --}}
    
</x-layout.app>