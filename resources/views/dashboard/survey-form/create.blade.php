<x-layout.dashboard class="survey-form create">
    
    {{-- Title --}}
    <h1 class="dashboard__title">Create Form</h1>

    {{-- Form --}}
    @livewire('dashboard.survey-form.create', compact('survey'))
    
</x-layout.dashboard>