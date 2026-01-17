<x-layout.app class="dashboard">
    
    {{-- Navigation --}}
    <x-navigation.dashboard />
    
    {{-- Slot --}}
    <section class="{{ $class }}">
        {{ $slot }}
    </section>
    
</x-layout.app>