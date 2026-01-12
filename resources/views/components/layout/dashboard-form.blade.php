<x-layout.dashboard class="dashboard-form {{ $class }}">
    
    {{-- Header --}}
    <div class="header">
        <h1 class="header__title">{{ $title }}</h1>
    </div>
    
    {{-- Slot --}}
    {{ $slot }}
    
</x-layout.dashboard>